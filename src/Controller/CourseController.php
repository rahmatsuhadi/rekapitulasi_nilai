<?php

include_once '../src/Model/CourseModel.php';

class CourseController {

    public function getCourses() {
        $model = new CourseModel();
        $coursesList = $model->getAllCourses();

        return $coursesList;
    }
    public function getCourseByGradeId($id) {
        $model = new CourseModel();
        $coursesList = $model->getCoursesByGradeId($id);

        return $coursesList;
    }
}
?>
