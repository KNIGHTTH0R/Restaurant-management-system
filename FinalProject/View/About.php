<!DOCTYPE html>
<html>
<body>


<p id="d"></p>

<script>
var txt = '{"name":"The Pink Restaurant", "phn":"Phone-0198765432", "open":"open today: 11am-10pm"}'
var obj = JSON.parse(txt);
document.getElementById("d").innerHTML = obj.name + ", " + obj.phn+","+obj.open;
</script>

</body>
</html>
