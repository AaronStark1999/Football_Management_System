function validate1()
{
	if(document.getelementById('id1').value.length==0){
        document.getelementById('id2').disabled()=true;
        document.getelementById('id3').disabled()=true;
        document.getelementById('id4').disabled()=true;
        document.getelementById('id5').disabled()=true;
        alert("Please don't enter tab")
      }
}