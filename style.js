function validate()
{ 
   if( document.PatientRegistration.patientname.value == "" )
   {
     alert( "Please provide your Name!" );
     document.PatientRegistration.patientname.focus() ;
     return false;
   }
   if( document.PatientRegistration.emergencyname.value == "" )
   {
     alert( "Please provide your Emergency Contact Name!" );
     document.PatientRegistration.emergencyname.focus() ;
     return false;
   }