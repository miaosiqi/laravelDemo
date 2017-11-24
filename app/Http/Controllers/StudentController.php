<?php
/**
 * 学生控制器
 * Created by PhpStorm.
 * User: boser
 * Date: 2017/5/11
 * Time: 11:56
 */
namespace App\Http\Controllers;
use App\Student;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class StudentController extends Controller{
    public function test(){
        $ret = DB::select("select * from Student");
        dump($ret);die;
    }

    public function add(){
        $ret = DB::insert('insert into Student(name,age,sex) values(?, ?, ?)', [
            'boser',
            18,
            1
        ]);
        dump($ret);
    }

    public function upd(){
        $ret = DB::update('update Student set age=36 where id = :id', ['id' => 4]);
        dump($ret);
    }

    public function del(){
        $ret = DB::delete('delete from Student where id = :id', ['id' => 7]);
        dd($ret);
    }

    /**
     * 学生列表
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function lst(){
        $ret = Student::orderBy('id', 'desc')->paginate(5);
        return view('Student.lst', ['ret' => $ret]);
    }

    /**
     * 添加学生
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create(Request $request){
        if($request->isMethod('POST')){
            $vali = [
                'name' => 'unique:Student,name|required|min:2|max:20|',
                'age' => 'integer',
                'sex' => 'integer',
            ];
            $vali_rules = [
                'integer' => ':attribute 必须为整数',
                'min' => ':attribute 最少 :min 位',
                'max' => ':attribute 最多 :max 位',
                'unique' => ':attribute 已存在',
            ];
            $vali_alias = [
                'name' => '姓名',
                'age' => '年龄',
                'sex' => '性别',
            ];
            $this->validate($request, $vali, $vali_rules, $vali_alias);
            $ret = $request->input();
            $flag = Student::create([
                'name' => $ret['name'],
                'age' => $ret['age'],
                'sex' => $ret['sex'],
            ]);
            if($flag){
                return redirect('Student/lst')->with('success', '添加成功');
            }else{
                return redirect()->back();
            }
        }
        $stu_ins = new Student();
        return view('Student/create', [
            'stu_ins' => $stu_ins
        ]);
    }

    /**
     * 修改
     * @param $id
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function update($id, Request $request){
        $ret = Student::find($id);
        $stu_ins = new Student();
        if($request->isMethod('POST')){
            $vali = [
                'name' => 'required|min:2|max:20|',
                'age' => 'integer',
                'sex' => 'integer',
            ];
            $vali_rules = [
                'integer' => ':attribute 必须为整数',
                'min' => ':attribute 最少 :min 位',
                'max' => ':attribute 最多 :max 位',
            ];
            $vali_alias = [
                'name' => '姓名',
                'age' => '年龄',
                'sex' => '性别',
            ];
            $this->validate($request, $vali, $vali_rules, $vali_alias);
            $data = $request->input();
            $ret->name = $data['name'];
            $ret->age = $data['age'];
            $ret->sex = $data['sex'];
            if($ret->save()){
                return redirect('Student/lst')->with('success', '修改成功 ' . $id);
            }else{
                return redirect()->back();
            }
        }
        return view('Student/update', [
            'ret' => $ret,
            'stu_ins' => $stu_ins
        ]);
    }

    /**
     * 详情
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function detail($id){
        $ret = Student::find($id);

        return view('Student/detail', ['ret' => $ret]);
    }

    /**
     * 删除
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function delete($id){
        $stu_ins = Student::find($id);
        $ret = $stu_ins->delete();
        if(false !== $ret){
            return redirect('Student/lst')->with('success', '删除成功 ' . $id);
        }else{
            return redirect('Student/lst')->with('error', '删除失败 ' . $id);
        }
    }
}
