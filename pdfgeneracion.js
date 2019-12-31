
var div = document.querySelector("cart-items");
      function generatePDF(){
          var imgdata;
          html2canvas($(".cart-items"),{
              useCORS:true,
              onrendered:function(canvas){
                imgdata = canvas.toDataURL('image/png');
                var doc = new jsPDF('p','pt','a4');
                doc.addImage(imgdata,'PNG',10,10);
                doc.save('pdf-generado.pdf');
                window.open(imgdata);
              }
          })

      }
  