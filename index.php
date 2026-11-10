
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>College Admission Portal</title>

    <link rel="stylesheet" href="style.css?v=3">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>

<div class="page-wrapper">
    <div class="form-container">

        <div class="form-header">
            <div class="logo">🎓</div>
            <h1>College Admission Portal</h1>
            <p>Start your journey towards a bright future!</p>
            <span class="tag">ONLINE APPLICATION 2026-27</span>
        </div>

        <form action="submit.php" method="POST" id="registrationForm">

            <div class="section-heading">
                <span>01</span>
                <div>
                    <h2>Personal Information</h2>
                    <p>Enter your basic details</p>
                </div>
            </div>

            <div class="form-grid">

                <div class="form-group full-width">
                    <label>Full Name *</label>
                    <input type="text" name="fullname" placeholder="Enter your full name" required>
                </div>

                <div class="form-group">
                    <label>Email Address *</label>
                    <input type="email" name="email" placeholder="example@gmail.com" required>
                </div>

                <div class="form-group">
                    <label>Phone Number *</label>
                    <input type="tel" name="phone" placeholder="10-digit mobile number" pattern="[0-9]{10}" required>
                </div>

                <div class="form-group">
                    <label>Date of Birth *</label>
                    <input type="date" name="dob" required>
                </div>

                <div class="form-group">
                    <label>Gender *</label>
                    <select name="gender" required>
                        <option value="">Select gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                    </select>
                </div>

            </div>

            <div class="section-heading">
                <span>02</span>
                <div>
                    <h2>Academic Information</h2>
                    <p>Select your preferred course</p>
                </div>
            </div>

            <div class="form-grid">

                <div class="form-group full-width">
                    <label>Course / Degree *</label>

                    <select name="course" required>
                        <option value="">Choose your course</option>

                        <optgroup label="Engineering - B.Tech">
                            <option value="B.Tech - Computer Science Engineering">B.Tech - Computer Science Engineering</option>
                            <option value="B.Tech - Information Technology">B.Tech - Information Technology</option>
                            <option value="B.Tech - AI and Data Science">B.Tech - AI and Data Science</option>
                            <option value="B.Tech - Electronics and Communication">B.Tech - Electronics and Communication</option>
                            <option value="B.Tech - Electrical and Electronics">B.Tech - Electrical and Electronics</option>
                            <option value="B.Tech - Mechanical Engineering">B.Tech - Mechanical Engineering</option>
                            <option value="B.Tech - Civil Engineering">B.Tech - Civil Engineering</option>
                            <option value="B.Tech - Biotechnology">B.Tech - Biotechnology</option>
                        </optgroup>

                        <optgroup label="Undergraduate Courses">
                            <option value="BCA">BCA</option>
                            <option value="BBA">BBA</option>
                            <option value="B.Com">B.Com</option>
                            <option value="B.Sc">B.Sc</option>
                            <option value="BA">BA</option>
                        </optgroup>

                        <optgroup label="Postgraduate Courses">
                            <option value="MCA">MCA</option>
                            <option value="MBA">MBA</option>
                            <option value="M.Com">M.Com</option>
                            <option value="M.Sc">M.Sc</option>
                        </optgroup>
                    </select>
                </div>

                <div class="form-group full-width">
                    <label>Residential Address *</label>
                    <textarea name="address" rows="4" placeholder="Enter your complete address" required></textarea>
                </div>

            </div>

            <div class="note">
                🔒 Your information will be used for registration purposes.
            </div>

            <button type="submit" class="submit-btn">
                Submit Application →
            </button>

            <p class="footer-text">
                © 2026 College Admission Portal. All rights reserved.
            </p>

        </form>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="script.js"></script>

</body>
</html>
