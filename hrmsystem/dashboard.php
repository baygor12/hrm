<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HR Management Dashboard</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
            display: flex;
            box-sizing: border-box;
        }

        .sidebar {
            background-color: #e5e5e5;
            width: 250px;
            padding: 40px 20px;
            box-sizing: border-box;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .sidebar img {
            width: 150px;
            height: auto;
            display: block;
            margin: 0 auto;
        }

        .main-content {
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            background-color: #f9f9f9;
            box-sizing: border-box;
        }

        .header {
            background-color: #6fc2ff;
            padding: 20px;
            text-align: center;
            position: relative;
        }

        .header h1 {
            color: white;
            font-size: 2.5rem;
            margin: 0;
            font-weight: bold;
        }

        .content {
            margin: 40px auto;
            text-align: center;
            max-width: 1200px;
        }

        .management-sections {
            display: flex;
            justify-content: space-between;
            gap: 20px;
        }

        .management-section {
            width: 40%;
            background-color: white;
            border-radius: 8px;
            box-sizing: border-box;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .management-section h2 {
            background-color: #004f9e;
            color: white;
            padding: 15px;
            margin: 0;
            font-size: 1.5rem;
            text-align: center;
        }

        .section-items {
            background-color: #e0f2ff;
            padding: 20px;
            display: flex;
            flex-direction: column;
            gap: 20px;
            border-radius: 0 0 8px 8px;
            box-sizing: border-box;
        }

        /* Additional Dropdown CSS */
        .dropdown {
            background-color: #3db5ff;
            color: white;
            border-radius: 8px;
            padding: 20px;
            text-align: center;
            font-size: 1.2rem;
            font-weight: bold;
            cursor: pointer;
            position: relative;
            transition: background-color 0.3s;
        }

        .dropdown-content {
            background-color: #3db5ff; /* Matches the dropdown color */
            margin-top: 10px;
            border-radius: 8px;
            padding: 10px;
            display: none;
        }

        .dropdown-content a {
            color: white;
            display: block;
            padding: 10px;
            text-decoration: none;
            font-size: 1rem;
            transition: background-color 0.3s;
        }

        .dropdown-content a:hover {
            background-color: #1a73e8; /* Slightly darker shade for hover effect */
        }

        .active .dropdown-content {
            display: block;
            background-color: #3db5ff; /* Ensure it stays the same color */
        }

        /* Hover effect for dropdown */
        .dropdown:hover {
            background-color: #005b99;
        }

    </style>
    <script>
        function toggleDropdown(element) {
            element.classList.toggle("active");
        }
    </script>
</head>

<body>

    <div class="sidebar">
        <img src="logo300.png" alt="Sidebar Logo">
    </div>

    <div class="main-content">
        <div class="header">
            <h1>Human Resources Department</h1>
        </div>

        <div class="content">
            <div class="management-sections">
                <!-- Recruitment Applicant Management Section -->
                <div class="management-section">
                    <h2>Recruitment Applicant Management</h2>
                    <div class="section-items">
                        <div class="dropdown" onclick="toggleDropdown(this)">
                            Recruitment
                            <div class="dropdown-content">
                                <a href="#">Job Create</a>
                                <a href="#">Job Vacancies</a> 
                                <a href="#">Job Posting</a>
                            </div>
                        </div>
                        <div class="dropdown" onclick="toggleDropdown(this)">
                            Applicant Information
                            <div class="dropdown-content">
                                <a href="#">Register</a>
                                <a href="#">Job Application</a>
                                <a href="#">Schedule Interview</a>
                                <a href="#">Passed/Failed</a>
                            </div>
                        </div>
                        <div class="dropdown" onclick="toggleDropdown(this)">
                            Candidates
                            <div class="dropdown-content">
                                <a href="#">Applicant List</a>
                                <a href="#">Hired/Reject</a>
                                <a href="#">Email Result</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Employee Information Management Section -->
                <div class="management-section">
                    <h2>Employee Information Management</h2>
                    <div class="section-items">
                        <div class="dropdown" onclick="toggleDropdown(this)">
                            Employee Information
                            <div class="dropdown-content">
                                <a href="#">Add Employee</a>
                                <a href="#">Employee List</a>
                            </div>
                        </div>
                        <div class="dropdown" onclick="toggleDropdown(this)">
                            Employee Performance Management
                            <div class="dropdown-content">
                                <a href="#">Records</a>
                                <a href="#">Monitoring</a>
                            </div>
                        </div>
                        <div class="dropdown" onclick="toggleDropdown(this)">
                            Leave Information
                            <div class="dropdown-content">
                                <a href="#">Request Leave</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include 'C:/xampp/htdocs/hrmsystem/includes/footer.php'; ?>
    </div>

</body>

</html>
