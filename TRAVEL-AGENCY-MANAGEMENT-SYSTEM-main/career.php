<?php include("project.html")?>
<body>

    
        <div class="container">
            <h1>Join Our Team</h1>
            <p>Explore exciting career opportunities with DD Travels</p>
        </div>

    <!-- Careers Section -->
    <section class="careers">
        <div class="container">
            <h2>Current Job Openings</h2>
            <div class="job-listings">
                <div class="job">
                    <h3>Travel Consultant</h3>
                    <p>Location: Remote</p>
                    <p>We are looking for a passionate Travel Consultant to join our team and help clients plan their dream vacations. If you have a love for travel and a knack for customer service, this role is for you.</p>
               
                </div>
                <div class="job">
                    <h3>Marketing Specialist</h3>
                    <p>Location: New York</p>
                    <p>If you're a creative marketer who can drive campaigns, generate leads, and connect with customers, join us as a Marketing Specialist at DD Travels.</p>
                    
                </div>
                <div class="job">
                    <h3>Customer Service Representative</h3>
                    <p>Location: Chicago</p>
                    <p>We're looking for a Customer Service Representative to assist travelers, resolve issues, and provide exceptional service. If you're friendly and solution-oriented, we'd love to have you!</p>
                  
                </div>
            </div>
        </div>
    </section>

    <!-- Application Form Section -->
    <section class="apply-form">
        <div class="container">
            <h2>Interested in Joining Us?</h2>
            <p>Fill out the form below to apply for any of the roles mentioned above.</p>
            <form action="#" method="POST" class="form">
                <div class="form-group">
                    <label for="name">Your Name</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                    <label for="email">Your Email</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="position">Position You Are Applying For</label>
                    <select id="position" name="position" required>
                        <option value="travel-consultant">Travel Consultant</option>
                        <option value="marketing-specialist">Marketing Specialist</option>
                        <option value="customer-service">Customer Service Representative</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="message">Why Should We Hire You?</label>
                    <textarea id="message" name="message" required></textarea>
                </div>
                <button type="submit" class="submit-button">Submit Application</button>
            </form>
        </div>
    </section>
<?php include("footer.html")?>
   