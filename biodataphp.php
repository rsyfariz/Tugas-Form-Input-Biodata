<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>biodataphp</title>
</head>
<style>
  input[type=text], select {
  width: 100%;
  padding: 12px 12px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=submit] {
  width: 100%;
  background-color: #54BAB9 ;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
input[type=submit]:hover {
  background-color:#f9004d
  ;
}
div {
  border-radius: 5px;
  background-color: #54BAB9;
  padding: 25px;
}
</style>
<body>
<h3>BIODATA PHP</h3>
<div>
      <form action="/action_page.php">
        <label for="fname">Nama :</label>
    <input type="text" id="fname" name="Nama" placeholder="nama">
    <tr>
      <td>Jenis Kelamin</td>
      <td>:</td>
      <td><select>
      <option></option> 
      <option>Laki Laki</option>
      <option>Perempuan</option>
      </select></td>
      </tr>

      <tr>
        <td>Agama</td>
        <td>:</td>
        <td><select>
        <option></option> 
        <option>Islam</option>
        <option>Kristen</option>
        <option>Buddha</option>
        <option>Hindu</option>
        <option>Konghucu</option>
        
        </select></td>
        </tr>
        <label for="alamat">Alamat :</label>
    <input type="text" id="alamat" name="alamat" placeholder="alamat">

    <label for="tmpt">Tempat Lahir :</label>
    <input type="text" id="tmpt" name="tempat lahir" placeholder="tempat tanggal lahir">

    <label for="tanggal">Tanggal Lahir :</label> 
    <input type="date" id="tanggal" name="tanggal" >
    <br>
    <br>

    <label for="hobi">Hobi :</label>
    <input type="text" id="hobi" name="hobi" placeholder="hobi">

    <label for="cita">Cita Cita :</label>
    <input type="text" id="cita" name="cita" placeholder="cita cita">
    <br>
    <br>
    <label for="usia">Usia :</label>
    <input type="number" id="usia" name="usia" placeholder="usia">
  <br>
  <br>
    <label for="asl">Asal Sekolah :</label>
    <input type="text" id="asl" name="asl" placeholder="asal sekolahmu">
  </form>
    </div>
    <input type="submit" value="Submit">
</body>
</html>