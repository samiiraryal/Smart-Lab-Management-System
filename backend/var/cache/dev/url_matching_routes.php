<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/api/logout' => [[['_route' => '_logout_api_login'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/api/login' => [[['_route' => 'api_login', '_controller' => 'App\\Controller\\ApiLoginController::login'], null, ['POST' => 0], null, false, false, null]],
        '/attendance/add' => [[['_route' => 'attendance_add', '_controller' => 'App\\Controller\\AttendanceController::addAttendance'], null, ['POST' => 0], null, false, false, null]],
        '/attendance/present' => [[['_route' => 'attendance_present', '_controller' => 'App\\Controller\\AttendanceController::getPresentStudents'], null, ['POST' => 0], null, false, false, null]],
        '/report/add' => [[['_route' => 'report_add', '_controller' => 'App\\Controller\\ReportController::addReport'], null, ['POST' => 0], null, false, false, null]],
        '/student/all' => [[['_route' => 'app_all_student', '_controller' => 'App\\Controller\\StudentController::index'], null, ['GET' => 0], null, false, false, null]],
        '/student/upload' => [[['_route' => 'student_upload', '_controller' => 'App\\Controller\\StudentController::upload'], null, ['POST' => 0], null, false, false, null]],
        '/teacher' => [[['_route' => 'app_teacher_index', '_controller' => 'App\\Controller\\TeacherController::index'], null, ['GET' => 0], null, true, false, null]],
        '/teacher/new' => [[['_route' => 'app_teacher_new', '_controller' => 'App\\Controller\\TeacherController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:98)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:134)'
                                .'|router(*:148)'
                                .'|exception(?'
                                    .'|(*:168)'
                                    .'|\\.css(*:181)'
                                .')'
                            .')'
                            .'|(*:191)'
                        .')'
                    .')'
                .')'
                .'|/attendance/student/([^/]++)(?'
                    .'|(*:233)'
                    .'|/date(*:246)'
                .')'
                .'|/report/view/([^/]++)(?'
                    .'|(*:279)'
                    .'|/([^/]++)(*:296)'
                .')'
                .'|/student/s(?'
                    .'|e(?'
                        .'|mester/([^/]++)(?'
                            .'|(*:340)'
                            .'|/section/([^/]++)(*:365)'
                        .')'
                        .'|ction/([^/]++)(*:388)'
                    .')'
                    .'|ubject/([^/]++)(*:412)'
                .')'
                .'|/teacher/([^/]++)(?'
                    .'|(*:441)'
                    .'|/edit(*:454)'
                    .'|(*:462)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        98 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        134 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        148 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        168 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        181 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        191 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        233 => [[['_route' => 'attendance_student', '_controller' => 'App\\Controller\\AttendanceController::getStudentAttendance'], ['id'], ['GET' => 0], null, false, true, null]],
        246 => [[['_route' => 'attendance_student_date', '_controller' => 'App\\Controller\\AttendanceController::getStudentAttendanceByDate'], ['id'], ['GET' => 0], null, false, false, null]],
        279 => [[['_route' => 'report_view', '_controller' => 'App\\Controller\\ReportController::viewReportsByDate'], ['date'], ['GET' => 0], null, false, true, null]],
        296 => [[['_route' => 'report_view_by_student_and_date', '_controller' => 'App\\Controller\\ReportController::viewReportByStudentAndDate'], ['studentId', 'date'], ['GET' => 0], null, false, true, null]],
        340 => [[['_route' => 'app_student_semester', '_controller' => 'App\\Controller\\StudentController::withSemester'], ['semester'], ['GET' => 0], null, false, true, null]],
        365 => [[['_route' => 'app_student_withsectionandsemester_index', '_controller' => 'App\\Controller\\StudentController::studentSectionAndStudentSemester'], ['semester', 'section'], ['GET' => 0], null, false, true, null]],
        388 => [[['_route' => 'app_student_section', '_controller' => 'App\\Controller\\StudentController::withSection'], ['section'], ['GET' => 0], null, false, true, null]],
        412 => [[['_route' => 'app_student_subject', '_controller' => 'App\\Controller\\StudentController::withsubject'], ['subject'], ['GET' => 0], null, false, true, null]],
        441 => [[['_route' => 'app_teacher_show', '_controller' => 'App\\Controller\\TeacherController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        454 => [[['_route' => 'app_teacher_edit', '_controller' => 'App\\Controller\\TeacherController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        462 => [
            [['_route' => 'app_teacher_delete', '_controller' => 'App\\Controller\\TeacherController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
