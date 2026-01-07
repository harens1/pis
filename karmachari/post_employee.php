<?php $title = "कर्मचारी विवरण फारम"; include 'header.php'; ?>

    <div class="form-container">
        <form id="employeeForm">

	    <label for="serial_no">क्र.सं.</label>
            <input type="text" id="serial_no" name="serial_no" value="1" readonly>

            <label for="municipality_no">बेनपा कोड नं. </label>
            <input type="text" id="municipality_no" name="municipality_no" value="BM1" readonly>

            
            <label for="employee_no">क.सं.नं. </label>
            <input type="text" id="employee_no" name="employee_no" maxlength="8" placeholder="यहाँ प्रविष्ट गर्नुहोस्" required>

            <label for="name">नाम</label>
            <input type="text" id="name" name="name" placeholder="यहाँ प्रविष्ट गर्नुहोस्" required>

            <label for="position">पद</label>
            <input type="text" id="position" name="position" placeholder="यहाँ प्रविष्ट गर्नुहोस्" required>

            <label for="level">तह </label>
            <select id="level" name="level" required>
                <option value="">कृपया छनोट गर्नुहोस्</option>
		<option value="-">-</option>
                <option value="1">१</option>
                <option value="4">४</option>
                <option value="5">५</option>
                <option value="6">६</option>
                <option value="7">७</option>
                <option value="8">८</option>
                <option value="9">९</option>
                <option value="10">१०</option>
            </select>

            <label for="service">सेवा</label>
            <select id="service" name="service" required>
                <option value="">कृपया छनोट गर्नुहोस्</option>
                <option value="administration">प्रशासन</option>
                <option value="accounts">लेखा</option>
                <option value="finance">आ.ले.प.</option>
                <option value="technical">प्राविधिक</option>
                <option value="education">शिक्षा</option>
                <option value="health">स्वास्थ्य</option>
                <option value="agriculture">कृषि</option>
                <option value="animal">पशु</option>
                <option value="law">कानून</option>
                <option value="miscellaneous">विविध</option>
            </select>

            <label for="group">समूह</label>
            <select id="group" name="group" required>
                <option value="">कृपया छनोट गर्नुहोस्</option>
                <option value="administration">सा.प्रशासन</option>
                <option value="accounts">लेखा</option>
                <option value="finance">आ.ले.प.</option>
                <option value="technical">प्राविधिक</option>
                <option value="education">शिक्षा</option>
                <option value="health">स्वास्थ्य</option>
                <option value="agriculture">कृषि</option>
                <option value="animal">पशु</option>
                <option value="law">कानून</option>
                <option value="miscellaneous">विविध</option>
            </select>

            <label for="branch">शाखा</label>
            <select id="branch" name="branch" required>
                <option value="">कृपया छनोट गर्नुहोस्</option>
                <option value="administration">प्रशासन र योजना</option>
                <option value="finance">आर्थिक प्रशासन</option>
                <option value="technical">प्राविधिक</option>
                <option value="education">शिक्षा</option>
                <option value="health">स्वास्थ्य</option>
                <option value="agriculture">कृषि</option>
                <option value="animal">पशु</option>
                <option value="law">कानून</option>
                <option value="miscellaneous">विविध</option>
            </select>

            <label for="sub_branch">उपशाखा</label>
            <select id="sub_branch" name="sub_branch" required>
                <option value="">कृपया छनोट गर्नुहोस्</option>
                <option value="administration">प्रशासन र योजनामा - क.प्र., यो. तथा अ.</option>
                <option value="secretariat">सचिवालय</option>
                <option value="ward_office">वडा कार्यालय</option>
                <option value="finance">लेखा, राजस्व, बजेट</option>
                <option value="technical">भवन तथा नक्सा पास</option>
                <option value="urban_infrastructure">शहरी पूर्वाधार</option>
                <option value="survey_branch">नापी शाखा</option>
            </select>

            <label for="ward_office">वडा कार्यालय</label>
            <select id="ward_office" name="ward_office" required>
                <option value="">वडा नं. चयन गर्नुहोस्</option>
                <option value="1">वडा नं. १</option>
                <option value="2">वडा नं. २</option>
                <option value="3">वडा नं. ३</option>
                <option value="4">वडा नं. ४</option>
                <option value="5">वडा नं. ५</option>
                <option value="6">वडा नं. ६</option>
                <option value="7">वडा नं. ७</option>
                <option value="8">वडा नं. ८</option>
                <option value="9">वडा नं. ९</option>
                <option value="10">वडा नं. १०</option>
                <option value="11">वडा नं. ११</option>
                <option value="12">वडा नं. १२</option>
                <option value="13">वडा नं. १३</option>
		<option value="-">-</option>
<option value="blank">---</option>
            </select>

            <label for="health_post">स्वास्थ्य चौकी</label>
            <select id="health_post" name="health_post" required>
                <option value="">स्वास्थ्य चौकी चयन गर्नुहोस्</option>
                <option value="1">वडा नं. १</option>
                <option value="2">वडा नं. २</option>
                <option value="3">वडा नं. ३</option>
                <option value="4">वडा नं. ४</option>
                <option value="5">वडा नं. ५</option>
                <option value="6">वडा नं. ६</option>
                <option value="7">वडा नं. ७</option>
                <option value="8">वडा नं. ८</option>
                <option value="9">वडा नं. ९</option>
                <option value="10">वडा नं. १०</option>
                <option value="11">वडा नं. ११</option>
                <option value="12">वडा नं. १२</option>
                <option value="13">वडा नं. १३</option>
		<option value="-">-</option>
<option value="">---</option>
            </select>
 <label for="status">अवस्था</label>
            <select id="status" name="status" required>
                <option value="active">सक्रिय</option>
                <option value="inactive">निष्क्रिय</option>
            </select>
                       <label for="mobile_no">मोबाइल नं.</label>
            <input type="text" id="mobile_no" name="mobile_no" maxlength="10"required>

            <label for="photo">फोटो</label>
            <input type="file" id="photo" name="photo" accept="image/*" required>

            <label for="citizenship">नागरिकता</label>
            <input type="file" id="citizenship" name="citizenship" accept="application/pdf, image/*" required>


            <!-- Add button for submission -->
            <button type="submit">प्रविष्ट गर्नुहोस्</button>
        </form>
    </div>

    <!-- Table to display submitted data -->
    <h2>कर्मचारी विवरण</h2>
    <table id="detailsTable">
        <thead>
            <tr>
                <th>क्र.सं.</th>
		<th>बेनपा कोड</th>
                <th>क.सं.नं.</th>
                <th>नाम</th>
                <th>पद</th>
                <th>तह</th>
                <th>सेवा</th>
                <th>समूह</th>
                <th>शाखा</th>
                <th>उपशाखा</th>
                <th>वडा कार्यालय</th>
                <th>स्वास्थ्य चौकी</th>
<th>मोवाइल नं.</th>
<th>QR कोड</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>

    <script>
        document.getElementById('employeeForm').addEventListener('submit', function(event) {
            event.preventDefault();
            
            // Get form data
            const employeeDetails = {
                serial_no: document.getElementById("serial_no").value,
                employee_no: document.getElementById("employee_no").value,
                name: document.getElementById("name").value,
                position: document.getElementById("position").value,
                level: document.getElementById("level").value,
                service: document.getElementById("service").value,
                group: document.getElementById("group").value,
                branch: document.getElementById("branch").value,
                sub_branch: document.getElementById("sub_branch").value,
                ward_office: document.getElementById("ward_office").value,
                health_post: document.getElementById("health_post").value,
            };

            // Create new row for the table
            const table = document.getElementById("detailsTable").getElementsByTagName('tbody')[0];
            const newRow = table.insertRow();

            for (const key in employeeDetails) {
                const cell = newRow.insertCell();
                cell.textContent = employeeDetails[key];
            }

            // Reset the form
            document.getElementById('employeeForm').reset();
        });
    </script>

    <!-- Home link -->
    <a href="#" class="home-link"> 🏠 गृहपृष्ठमा जानुहोस्</a>
</body>
</html>
