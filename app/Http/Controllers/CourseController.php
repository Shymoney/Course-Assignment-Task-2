<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\CourseRequest;
use App\Models\Course;
use App\Models\FeesAndFunding;
use Exception;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Application;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Session;
use Str;
use Symfony\Component\HttpFoundation\Response as ResponseConstant;

class CourseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     */
    public function index(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        $courseData = Course::paginate(10);
        return view('view-course')->with(['courseData'=> $courseData]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     * @throws Exception
     */
    public function store(Request $request): RedirectResponse
    {
        try {

            $courseData = new Course();
            $feesFunding = new FeesAndFunding();
            $courseData->uuid = Str::uuid()->toString();
            $courseData->subject_area = $request->subjectArea;
            $courseData->course_name = $request->courseName;
            $courseData->course_details = $request->courseDetails;
            $courseData->level = $request->level;
            $courseData->entry_requirement = $request->year.' * '. $request->integrated.' * ' .$request->IELTS;
            $courseData->location = $request->location;
            $courseData->starting = $request->starting;

            $courseData->save();

            $feesFunding->year = '2023/2024';
            $feesFunding->uk_full_time = $request->fullTime;
            $feesFunding->uk_part_time = $request->partTime;
            $feesFunding->international_full_time = $request->internationalFullTime;

            $feesFunding->feesAndFunding()->associate($courseData->id);
            $feesFunding->save();

            Session::flash('message','Course Data Successfully Uploaded');

            return back()->with('message','Course Data Successfully Uploaded');

        }catch (\Error $error) {
            throw new Exception($error->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Course $course)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $uuid): RedirectResponse
    {
        $responseData =  $this->getCourseByUuid($uuid);
        $responseData->delete();

        Session::flash('success', 'Course Data Successfully Deleted');

        return back()->with('success', 'Course Data Successfully Deleted');
    }

    public function getCourseByUuid(string $uuid): ?Course
    {
        return Course::where('uuid', '=', $uuid)->firstOrFail();
    }
}
