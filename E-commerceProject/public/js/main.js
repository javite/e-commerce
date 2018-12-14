
window.addEventListener("load", function(){
         // CAMBIO DE MAPA //
        $('.sucursal').click(function() {
            var sucursal = $(this).data('name');
            console.log(sucursal);
            if (sucursal == "nunez") {
                $('.sucursal-map-container iframe').attr('src', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3286.184220461507!2d-58.44580918427581!3d-34.54889078047388!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcb436ef74b8e5%3A0x2aea39ac02ee146f!2sAv.+Monroe+860%2C+Buenos+Aires!5e0!3m2!1ses-419!2sar!4v1544740352077');
                $('.sucursal').removeClass('selected');
                $(this).addClass('selected');
            }
            if (sucursal == "centro") {
                $('.sucursal-map-container iframe').attr('src', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3283.33113932786!2d-58.383861984274354!3d-34.62107128045508!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bccb28ea8781cb%3A0x950feb519009506e!2sLima+1111%2C+C1073AAW+CABA!5e0!3m2!1ses-419!2sar!4v1544740427912');
                $('.sucursal').removeClass('selected');
                $(this).addClass('selected');
            }
            if (sucursal == "brasil") {
                $('.sucursal-map-container iframe').attr('src', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4347.79864900774!2d-46.67772571971289!3d-23.602600733434173!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce50ab7e792ef9%3A0x1eaad4d76eaaf389!2sAv.+Dr.+Cardoso+de+Melo%2C+90+-+Vila+Olimpia%2C+S%C3%A3o+Paulo+-+SP%2C+04548-000%2C+Brasil!5e0!3m2!1ses-419!2sar!4v1544740467583');
                $('.sucursal').removeClass('selected');
                $(this).addClass('selected');
            };
        })
});

