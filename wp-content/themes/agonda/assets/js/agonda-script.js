$(document).ready(function($){
          var date = new Date();
          var today = new Date(date.getFullYear(), date.getMonth(), date.getDate());
          var end = new Date(date.getFullYear(), date.getMonth(), date.getDate());
         
          $('#datepicker1').datepicker({
         format: "mm/dd/yyyy",
         todayHighlight: true,
         startDate: today,
         
         autoclose: true
          });
          $('#datepicker2').datepicker({
         format: "mm/dd/yyyy",
         todayHighlight: true,
         startDate: today,
         
         autoclose: true
          });
         
          $('#datepicker1,#datepicker2').datepicker('setDate', today);
         });