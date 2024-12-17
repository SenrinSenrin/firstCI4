<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

use App\Models\CoursesModel;

class CoursesController extends BaseController
{
    public function index()
    {
        //
        $session = session();
        if (!$session->get('isLoggedIn')) {
            return redirect()->to('/signin');
        }

        $coursemodel = new CoursesModel();
        $courses = $coursemodel->findAll();

        return view('Programs/Courses', ['courses' => $courses]);
    }

    public function save()
    {
        // Get form data
        $name = $this->request->getPost('name');
        $description = $this->request->getPost('description');
        
        // Handle file upload
        $image = $this->request->getFile('image');
        if ($image && $image->isValid() && !$image->hasMoved()) {
            $imageName = $image->getRandomName(); // Generate a random name for the image
            $image->move('images', $imageName); // Move the image to the 'uploads' folder
        }

        // Prepare data for saving
        $data = [
            'name' => $name,
            'description' => $description,
            'image' => isset($imageName) ? $imageName : null // Store the image filename
        ];

        // Load model and save data
        $model = new CoursesModel();
        if ($model->save($data)) {
            return redirect()->to('/courses')->with('message', 'Course added successfully!');
        } else {
            return redirect()->back()->with('error', 'Failed to add course.');
        }
    }

    public function delete($id)
    {
        $courseModel = new CoursesModel();
        $course = $courseModel->find($id);

        if ($course) {
            $courseModel->delete($id);
            return redirect()->to('/courses')->with('message', 'Course deleted successfully!');
        } else {
            return redirect()->back()->with('error', 'Failed to delete course.');
        }
    }
}
