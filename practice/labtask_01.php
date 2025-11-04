<!DOCTYPE html>

<head>
        <title>
            WT_0
</title>
</head>
<style>
    body {
        background-color:RosyBrown;

    }
    
    div{
  width:600px;
  height: 950px;
  padding:10px;
  border:3px solid black ;
  margin:0;
 background-color:white;
    }
</style>

<body>
    <center>
 <div>
    
<table>
 <h1 style ="color:red;font-size:30px">Student Registration Information</h1>
 <hr color = "Red">
 

<tr>
<td>Enter your firstname:</td>
</tr>
<tr>
<td><input type="text"></td>
</tr>

<tr>
<td>Enter your lastname:</td>
</tr>
<tr>
<td><input type="text"></td>
</tr>


<tr>
<td>Enter your student id:</td>
</tr>
<tr>
<td><input type="text"></td>
</tr>


<tr>
<td>Program/Major:</td>
</tr>

    <tr>
        <td><select name="sub" id="sub">
            <option value="CSE">BSc in CSE</option>
                        <option value="EEE">BSc in EEE</option>
                                    <option value="BBA">BSc in BBA</option>
                                               
        </select></td>
    </tr>

<tr>
<td>Department:</td>
</tr>
<tr>
        <td><select name="sub" id="sub">
            <option value="Fst">FST</option>
                        <option value="FE">FE</option>
                                    <option value="BBA"> BBA</option>
                                               
        </select></td>
    </tr>


<tr>
<td>Phone:</td>
</tr>
<tr>
<td><input type="number"></td>
</tr>

<tr>
<td>University email:</td>
</tr>
<tr>
<td><input type="text"></td>
</tr>

<tr>
<td>Create Password(8 characters)</td>
</tr>
<tr>
<td><input type="text"></td>
</tr>

<tr>
<td>Confirm Password</td>
</tr>
<tr>
<td><input type="text"></td>
</tr>


<tr>
<td> Semester Selection:</td>
</tr>
 
<td>
<input type="radio"name="pc"> Summer 2024

<input type="radio"name="pc"> Fall 2024

<input type="radio"name="pc"> Spring 2025

<input type="radio"name="pc"> Other/Special Term
</td>
</table>


<tr>
<td> Requested Credit Load (Max 15)</td>
</tr>
<br>
<tr>
  <input type="number" placeholder="e.g.,9or12"> 

</tr> 
<br>
<input type="checkbox"> I require academic advising before final Registration

<h2 style ="color:red;font-size:30px">Course Selection</h2>
 <hr color = "Red";border = 2px solid>
 <td>
    <br>

<input type="checkbox"> MATH 1201 (Calculus 1)
<input type="checkbox"> CS 2105 (Data Structure)
<input type="checkbox"> ECON 1001 (Microeconomics)
<br>
<input type="checkbox"> PHY 1102 (Physics Lab)
</td>
<br><br>
<tr>
<td>Comments/ Sepcial Requests</td>
</tr>
<br>
<tr>
<td><input type="text"></td>
</tr>
<br><br>

<input type="Submit">
<input type="Reset"><br>

</center>
</div>
</body>
</html>