import React from 'react';
import { Routes, Route, Navigate } from 'react-router-dom';
import LoginPage from "../pages/authentication/Login/Login.js";
import About from "../pages/about/about.js";
// import Contact from "../pages/contact/contact.js";
// import Home from "../pages/home/home.js";
import AuthenticationRoute from "./AuthenticationRoutes.js";
import Dashboard from "../components/Dashboard/Dashboard.js";
import Attendance from "../components/attendance/attendance.js";

const AppRoutes = () => {
  return (
    <>
      <Routes>
        {/* Default route to redirect to login */}
        <Route path="/" element={<Navigate to="/login" />} />

        {/* authentication routes */}
        <Route element={<AuthenticationRoute />}>
          <Route path="/login" element={<LoginPage />} />
          <Route path="/signup" element={<p>Signup route here</p>} />
          {/* <Route path="/dashboard" element={<Dashboard />} /> */}
          <Route path="/dashboard" element={<Dashboard />} />
          <Route path="/attendance" element={<Attendance />} />
        </Route>

        {/* all other routes after authentication */}
        {/* <Route element={<p>Route layout</p>}>
          <Route path="/about" element={<About />} />
          <Route path="/contact" element={<Contact />} />
        </Route> */}
      </Routes>
    </>
  );
};

export default AppRoutes;
