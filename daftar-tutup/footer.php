<script src="../../assets/datepicker/js/jquery.min.js"></script>
<script src="../../assets/datepicker/js/bootstrap.min.js"></script>
<script src="../../assets/datepicker/libraries/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<script src="../../assets/datepicker/js/custom.js"></script>

<script>

$(document).ready(function(){
    setDatePicker()
    setDateRangePicker(".startdate", ".enddate")
    setMonthPicker()
    setYearPicker()
    setYearRangePicker(".startyear", ".endyear")
})

  $(document).ready(function() {
    $("#domainsTable").tablesorter({
      sortList: [
        [3, 1],
        [2, 0]
      ]
    });
  });

  function searchTable() {
    var input;
    var saring;
    var status;
    var tbody;
    var tr;
    var td;
    var i;
    var j;
    input = document.getElementById("input");
    saring = input.value.toUpperCase();
    tbody = document.getElementsByTagName("tbody")[0];;
    tr = tbody.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
      td = tr[i].getElementsByTagName("td");
      for (j = 0; j < td.length; j++) {
        if (td[j].innerHTML.toUpperCase().indexOf(saring) > -1) {
          status = true;
        }
      }
      if (status) {
        tr[i].style.display = "";
        status = false;
      } else {
        tr[i].style.display = "none";
      }
    }
  }


</script>
</body>

</html>
