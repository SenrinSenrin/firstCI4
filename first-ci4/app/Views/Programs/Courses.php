    
<?= view('Layout/Header') ?>   <!-- Includes Header -->
<?= view('Layout/Navbar') ?>   <!-- Includes Navbar -->    
        <!-- Sidebar and Content Wrapper -->
    <div class="container mt-1 d-flex">
        <!-- Sidebar -->
        <nav class="bg-dark text-white p-3" style="width: 250px; height: 100vh;">
            <h4 class="text-center">Dashboard</h4>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a href="#" class="nav-link text-white">Home</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-white">All Courses</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-white">Add New Course</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-white">Settings</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-white">Logout</a>
                </li>
            </ul>
        </nav>

        <!-- Main Content -->
        <div class="flex-grow-1">
            <!-- Top Navbar -->
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Course Dashboard</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="#">Profile</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Notifications</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <!-- Dashboard Content -->
            <div class="container mt-4">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary mb-4" data-bs-toggle="modal" data-bs-target="#addCourseModel">
                Add your course
                </button>
                <div class="row">
                    <!--Course Cards -->
                    <?php foreach ($courses as $course): ?>
                    <div class="col-md-4">
                        <div class="card mb-4">
                            <img src="<?= base_url('images/' . $course['image']) ?>" class="card-img-top" alt="<?= $course['image'] ?>">
                            <div class="card-body">
                                <h5 class="card-title"><?= $course['name'] ?></h5>
                                <p class="card-text"><?= $course['description'] ?></p>
                                <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editCourseModel">Edit course</a>
                                <!-- Delete Button -->
                                <a href="/courses/delete/<?= $course['id']; ?>" 
                                class="btn btn-danger" 
                                onclick="return confirm('Are you sure you want to delete this course?');">
                                Delete
                                </a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach;?>
                </div>
            </div>
            <!--Add course Modal -->
            <div class="modal fade modal-xl" id="addCourseModel" tabindex="-1" aria-labelledby="addCourseModelLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="addCourseModelLabel">Add New Course</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="/courses/save" method="POST" enctype="multipart/form-data">
                            <div class="modal-body">
                                <!-- Course Name -->
                                <div class="mb-3">
                                    <label for="courseName" class="form-label">Course Name</label>
                                    <input type="text" class="form-control" id="courseName" name="name" required>
                                </div>

                                <!-- Course Description -->
                                <div class="mb-3">
                                    <label for="courseDescription" class="form-label">Course Description</label>
                                    <textarea class="form-control" id="courseDescription" name="description" rows="3" required></textarea>
                                </div>

                                <!-- Course Image -->
                                <div class="mb-3">
                                    <label for="courseImage" class="form-label">Course Image</label>
                                    <input type="file" class="form-control" id="courseImage" name="image" accept="image/*" required>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save Course</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!--Edit course Modal -->
            <div class="modal fade modal-xl" id="editCourseModel" tabindex="-1" aria-labelledby="addCourseModelLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="addCourseModelLabel">Edit Course</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="/courses/save" method="POST" enctype="multipart/form-data">
                            <div class="modal-body">
                                <!-- Course Name -->
                                <div class="mb-3">
                                    <label for="courseName" class="form-label">Course Name</label>
                                    <input type="text" class="form-control" id="courseName" name="name" required>
                                </div>

                                <!-- Course Description -->
                                <div class="mb-3">
                                    <label for="courseDescription" class="form-label">Course Description</label>
                                    <textarea class="form-control" id="courseDescription" name="description" rows="3" required></textarea>
                                </div>

                                <!-- Course Image -->
                                <div class="mb-3">
                                    <label for="courseImage" class="form-label">Course Image</label>
                                    <input type="file" class="form-control" id="courseImage" name="image" accept="image/*" required>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save Course</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
            </div>
        </div>
    </div>

<?= view('Layout/Footer')?>   <!-- Includes Footer -->



    