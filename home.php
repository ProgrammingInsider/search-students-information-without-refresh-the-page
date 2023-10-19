<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Search student info wothout refresh the pages</title>
</head>
<body>
    <main>
        <img src="Rolling.gif" id="loading" alt="">
        <section id="search_info">
            <input type="search" name="search" id="search" placeholder="Search with ID">
            <div onclick="search_info()" id="btn_search">Search</div>
        </section>

        <section id="student_info_sheet">
            <header>
                <h1 id="title">Student Information Sheet</h1>
            </header>

            <div class="primary_info row">
                <div class="student_photo">
                    <img src="student_photo/profile image.jpg" id="student_photo" alt="">
                </div>

                <div class="student_username column">
                    <label for="Firstname">
                        First Name
                        <input type="text" name="first" id="firstname" placeholder="First Name" disabled>
                    </label>

                    <label for="middlename">
                        Middle Name
                        <input type="text" name="middle" id="middlename" placeholder="Middle Name" disabled>
                    </label>

                    <label for="lastname">
                        Last Name
                        <input type="text" name="last" id="lastname" placeholder="Last Name" disabled>
                    </label>
                </div>
            </div>

            <div class="student_info column">
                <h2 class="section_title">Student's Detail Information</h2>
                <div class="column">
                     <label for="email">
                        Email
                        <input type="email" name="email" id="email" placeholder="Email" disabled>
                    </label>

                    <div class="row">
                        <label class="row_label" for="birthday">
                            Birthday
                            <input type="text" name="birthday" id="birthday" placeholder="Birthday" disabled>
                        </label>

                        <label class="row_label" for="age">
                            Age
                            <input type="text" name="age" id="age" placeholder="Age" disabled>
                        </label>
                    </div>

                         <label for="emer">
                           Emergency Phone
                            <input type="text" name="emer" id="emer" placeholder="Emergency phone" disabled>
                        </label>
                </div>
            </div>

            <div class="parent_info column">
                <h2 class="section_title">Parent's Detail Information</h2>
                <div class="column">
                    <p class="sub_title">Parent/Gaurdian Name</p>
                    <div class="row">
                        <label class="row_label" for="parentfirstname">
                            First Name
                            <input type="text" name="parentfirstname" id="parentfirstname" placeholder="First Name" disabled>
                        </label>

                        <label class="row_label" for="parentlastname">
                            Last Name
                            <input type="text" name="parentlastname" id="parentlastname" placeholder="Last Name" disabled>
                        </label>
                    </div>

                        <label for="emer">
                            Work Phone
                            <input type="text" name="workphone" id="workphone" placeholder="Work Phone" disabled>
                        </label>
                </div>
            </div>
        </section>
    </main>

    <script src="js.js"></script>
</body>
</html>