<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
    	return view('admin.dashboard');
    }

   // Curriculum

    public function curriculum()
    {
    	return view('admin.curriculum.view_curriculum');
    }

    public function addSubjects(Request $request)
    {	
    	
    	return view('admin.curriculum.add_subjects');
    }

    public function addSubjectsUnits()
    {
    	return view('admin.curriculum.add_subjects_units');
    }

    public function viewSubjectsUnits()
    {
    	return view('admin.curriculum.view_subjects_units');
    }

    public function addTopics()
    {
    	return view('admin.curriculum.add_topics');
    }

    // Manage User

    public function register()
    {
    	return view('admin.manageUser.register');
    }

    public function viewRegisterStudents()
    {
    	return view('admin.manageUser.view_registers_students');
    }

    public function viewRegisterTeacher()
    {
    	return view('admin.manageUser.view_registers_teachers');
    }


    //Add Projects

    public function addProjects()
    {
    	return view('admin.projects.add_projects');
    }

    public function viewProjectsAssignments()
    {
    	return view('admin.projects.view_projects_assignments');
    }

    public function viewFeedback()
    {
    	return view('admin.projects.view_feedback');
    }

    //Add Notice

    public function addNotice()
    {
    	return view('admin.notice.add_notice');
    }


    public function viewNotice()
    {
    	return view('admin.notice.view_notice');
    }
}
