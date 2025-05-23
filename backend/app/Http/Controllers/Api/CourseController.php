<?php

namespace App\Http\Controllers\Api;

use App\Models\Course;
use App\Http\Controllers\Controller;
use App\Http\Requests\CourseRequest;


class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = Course::all();
        return response()->json($courses, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
     public function store(CourseRequest $request)
    {
        $course = Course::create($request->validated());
        return response()->json($course, 201);
    }

    /**
     * Display the specified resource.
     */
     public function show(Course $course)
    {
        return response()->json($course,200);
    }

    /**
     * Update the specified resource in storage.
     */
     public function update(CourseRequest $request, Course $course)
    {
        $course->update($request->validated());
        return response()->json($course, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        $course->delete();
        return response()->json(null, 204);
    }
}
