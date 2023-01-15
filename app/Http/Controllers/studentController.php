<?php

namespace App\Http\Controllers;

use App\Models\klasses;
use App\Models\major;
use App\Models\student;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Validator;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class studentController extends Controller
{
    private $key;

    public function search($keyword)
    {
        $this->key = $keyword;
        $students = student::whereHas('major', function (Builder $query) {
            $keyword = $this->key;
            $query->where('name', 'LIKE', '%' . $keyword . '%')->orWhere('major', 'LIKE', '%' . $keyword . '%');
        })->paginate(5);
        return view('student.index', compact('students'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $keyword = $request->search;
        if (!empty($keyword)) {
            return $this->search($keyword);
        }
        $students = student::paginate(5);
        return view('student.index', compact('students'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $majors = major::paginate(5);
        $kelas = klasses::paginate(5);
        return view('student.add', compact('majors', 'kelas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $students = new student();
        $request->validate([
            'nim' => 'required',
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'semester' => 'required',
            'entry_year' => 'required',
            'major_id' => 'required',
            'kelas_id' => 'required'
        ]);

        $students->nim = $request->nim;
        $students->name = $request->name;
        $students->email = $request->email;
        $students->phone = $request->phone;
        $students->address = $request->address;
        $students->semester = $request->semester;
        $students->entry_year = $request->entry_year;
        $students->major_id = $request->major_id;
        $students->kelas_id = $request->kelas_id;
        $students->save();

        Alert::success('success', 'Data Berhasil Ditambah');
        return redirect()->to('/mahasiswa');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = student::findOrFail($id);
        // dd($student->class->classroom);
        return view('student.student', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $students = student::findOrFail($id);
        $majors = major::paginate(5);
        $kelas = klasses::paginate(5);
        return view('student.edit', compact('students', 'majors', 'kelas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $students = student::findOrFail($id);
        $request->validate([
            'nim' => 'required',
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'semester' => 'required',
            'entry_year' => 'required',
            'major_id' => 'required',
            'kelas_id' => 'required'
        ]);

        $students->nim = $request->nim;
        $students->name = $request->name;
        $students->email = $request->email;
        $students->phone = $request->phone;
        $students->address = $request->address;
        $students->semester = $request->semester;
        $students->entry_year = $request->entry_year;
        $students->major_id = $request->major_id;
        $students->kelas_id = $request->kelas_id;
        $students->update();

        Alert::success('success', 'Data Berhasil Diperbarui');
        return redirect()->to('/mahasiswa');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $students = student::findOrFail($id);
        $students->delete();

        Alert::success('success', 'Data Berhasil Dihapus');
        return redirect()->to('/mahasiswa');
    }
}
