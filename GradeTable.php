<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="GradeTableStyle.css">
</head>

<body>
  <div id="input-form">
    <h4>Accumulative GPA <input id="accumulative_GPA" size="10" maxlength="4" onkeyup="calculate(event)" required></h4>
    <h4>Accumulative Credit <input id="accumulative_Credit" size="10" onkeyup="calculate()" required></h4>
  </div>
  <h2>Course</h2>
  <hr>
  <div class="submitBtn-block">
    <input type="button" value="Add Row" id="addNewClassBtn"><br><br>
  </div>
  
    <table id="gradeTable">
      <tbody id="classes_tbody">
        <tr>
          <th>No</th>
          <th>Course ID</th>
          <th>Course Name</th>
          <th>Credit</th>
          <th>Grade</th>
        </tr>

        <tr>
          <td><label>1</label></td>
          <td><input size="15" class="courseID" name="course[]" required></td>
          <td><input size="15" class="courseName" name="name[]" required></td>
          <td><input size="15" class="credit" onkeyup="calculate()" pattern="[0-9]" maxlength="1" name="credit[]" required></td>
          <td><input size="15" class="grade" onkeyup="calculate(event)" maxlength="4" name="grade[]" required></td>
        </tr>
      </tbody>
      <input type="text" id="x" value="1" name="i" style="display: none;">
    </table>
    <input type="submit" value="Save" id="saveBtn" name="save">
  <!-- </form> -->
  <br>

  <!-- Show result -->
  <div id="result">
    <div class="result-block">
      <h3 class="result-text">Total Credits</h3>
      <input type="text" class="result-text" name="totalcredit" value="0" id="total_credits" readonly="readonly">
    </div>
    <div class="result-block">
      <h3 class="result-text">GPA</h3>
      <input type="text" class="result-text" name="totalgrade" value="0.00" id="gpa" readonly="readonly">
    </div>
  </div>

  <script src="script.js"></script>
</body>
</html>