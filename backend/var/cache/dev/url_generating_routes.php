<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_xdebug' => [[], ['_controller' => 'web_profiler.controller.profiler::xdebugAction'], [], [['text', '/_profiler/xdebug']], [], [], []],
    '_profiler_font' => [['fontName'], ['_controller' => 'web_profiler.controller.profiler::fontAction'], [], [['text', '.woff2'], ['variable', '/', '[^/\\.]++', 'fontName', true], ['text', '/_profiler/font']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    'attendance_add' => [[], ['_controller' => 'App\\Controller\\AttendanceController::addAttendance'], [], [['text', '/attendance/add']], [], [], []],
    'attendance_present' => [[], ['_controller' => 'App\\Controller\\AttendanceController::getPresentStudents'], [], [['text', '/attendance/present']], [], [], []],
    'attendance_student' => [['id'], ['_controller' => 'App\\Controller\\AttendanceController::getStudentAttendance'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/attendance/student']], [], [], []],
    'attendance_student_date' => [['id'], ['_controller' => 'App\\Controller\\AttendanceController::getStudentAttendanceByDate'], [], [['text', '/date'], ['variable', '/', '[^/]++', 'id', true], ['text', '/attendance/student']], [], [], []],
    'report_add' => [[], ['_controller' => 'App\\Controller\\ReportController::addReport'], [], [['text', '/report/add']], [], [], []],
    'report_view' => [['date'], ['_controller' => 'App\\Controller\\ReportController::viewReportsByDate'], [], [['variable', '/', '[^/]++', 'date', true], ['text', '/report/view']], [], [], []],
    'report_view_by_student_and_date' => [['studentId', 'date'], ['_controller' => 'App\\Controller\\ReportController::viewReportByStudentAndDate'], [], [['variable', '/', '[^/]++', 'date', true], ['variable', '/', '[^/]++', 'studentId', true], ['text', '/report/view']], [], [], []],
    'app_all_student' => [[], ['_controller' => 'App\\Controller\\StudentController::index'], [], [['text', '/student/all']], [], [], []],
    'app_student_semester' => [['semester'], ['_controller' => 'App\\Controller\\StudentController::withSemester'], [], [['variable', '/', '[^/]++', 'semester', true], ['text', '/student/semester']], [], [], []],
    'app_student_section' => [['section'], ['_controller' => 'App\\Controller\\StudentController::withSection'], [], [['variable', '/', '[^/]++', 'section', true], ['text', '/student/section']], [], [], []],
    'app_student_subject' => [['subject'], ['_controller' => 'App\\Controller\\StudentController::withsubject'], [], [['variable', '/', '[^/]++', 'subject', true], ['text', '/student/subject']], [], [], []],
    'app_student_withsectionandsemester_index' => [['semester', 'section'], ['_controller' => 'App\\Controller\\StudentController::studentSectionAndStudentSemester'], [], [['variable', '/', '[^/]++', 'section', true], ['text', '/section'], ['variable', '/', '[^/]++', 'semester', true], ['text', '/student/semester']], [], [], []],
    'app_teacher_index' => [[], ['_controller' => 'App\\Controller\\TeacherController::index'], [], [['text', '/teacher/']], [], [], []],
    'app_teacher_new' => [[], ['_controller' => 'App\\Controller\\TeacherController::new'], [], [['text', '/teacher/new']], [], [], []],
    'app_teacher_show' => [['id'], ['_controller' => 'App\\Controller\\TeacherController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/teacher']], [], [], []],
    'app_teacher_edit' => [['id'], ['_controller' => 'App\\Controller\\TeacherController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/teacher']], [], [], []],
    'app_teacher_delete' => [['id'], ['_controller' => 'App\\Controller\\TeacherController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/teacher']], [], [], []],
    'App\Controller\AttendanceController::addAttendance' => [[], ['_controller' => 'App\\Controller\\AttendanceController::addAttendance'], [], [['text', '/attendance/add']], [], [], []],
    'App\Controller\AttendanceController::getPresentStudents' => [[], ['_controller' => 'App\\Controller\\AttendanceController::getPresentStudents'], [], [['text', '/attendance/present']], [], [], []],
    'App\Controller\AttendanceController::getStudentAttendance' => [['id'], ['_controller' => 'App\\Controller\\AttendanceController::getStudentAttendance'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/attendance/student']], [], [], []],
    'App\Controller\AttendanceController::getStudentAttendanceByDate' => [['id'], ['_controller' => 'App\\Controller\\AttendanceController::getStudentAttendanceByDate'], [], [['text', '/date'], ['variable', '/', '[^/]++', 'id', true], ['text', '/attendance/student']], [], [], []],
    'App\Controller\ReportController::addReport' => [[], ['_controller' => 'App\\Controller\\ReportController::addReport'], [], [['text', '/report/add']], [], [], []],
    'App\Controller\ReportController::viewReportsByDate' => [['date'], ['_controller' => 'App\\Controller\\ReportController::viewReportsByDate'], [], [['variable', '/', '[^/]++', 'date', true], ['text', '/report/view']], [], [], []],
    'App\Controller\ReportController::viewReportByStudentAndDate' => [['studentId', 'date'], ['_controller' => 'App\\Controller\\ReportController::viewReportByStudentAndDate'], [], [['variable', '/', '[^/]++', 'date', true], ['variable', '/', '[^/]++', 'studentId', true], ['text', '/report/view']], [], [], []],
    'App\Controller\StudentController::index' => [[], ['_controller' => 'App\\Controller\\StudentController::index'], [], [['text', '/student/all']], [], [], []],
    'App\Controller\StudentController::withSemester' => [['semester'], ['_controller' => 'App\\Controller\\StudentController::withSemester'], [], [['variable', '/', '[^/]++', 'semester', true], ['text', '/student/semester']], [], [], []],
    'App\Controller\StudentController::withSection' => [['section'], ['_controller' => 'App\\Controller\\StudentController::withSection'], [], [['variable', '/', '[^/]++', 'section', true], ['text', '/student/section']], [], [], []],
    'App\Controller\StudentController::withsubject' => [['subject'], ['_controller' => 'App\\Controller\\StudentController::withsubject'], [], [['variable', '/', '[^/]++', 'subject', true], ['text', '/student/subject']], [], [], []],
    'App\Controller\StudentController::studentSectionAndStudentSemester' => [['semester', 'section'], ['_controller' => 'App\\Controller\\StudentController::studentSectionAndStudentSemester'], [], [['variable', '/', '[^/]++', 'section', true], ['text', '/section'], ['variable', '/', '[^/]++', 'semester', true], ['text', '/student/semester']], [], [], []],
    'App\Controller\TeacherController::index' => [[], ['_controller' => 'App\\Controller\\TeacherController::index'], [], [['text', '/teacher/']], [], [], []],
    'App\Controller\TeacherController::new' => [[], ['_controller' => 'App\\Controller\\TeacherController::new'], [], [['text', '/teacher/new']], [], [], []],
    'App\Controller\TeacherController::show' => [['id'], ['_controller' => 'App\\Controller\\TeacherController::show'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/teacher']], [], [], []],
    'App\Controller\TeacherController::edit' => [['id'], ['_controller' => 'App\\Controller\\TeacherController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id', true], ['text', '/teacher']], [], [], []],
    'App\Controller\TeacherController::delete' => [['id'], ['_controller' => 'App\\Controller\\TeacherController::delete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/teacher']], [], [], []],
];
