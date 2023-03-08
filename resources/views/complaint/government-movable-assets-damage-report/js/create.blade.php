<script type="text/javascript">

    var isComplainantSign = false;
    var leftMButtonDownComplainant = false;

    var isAssetOfficerSign = false;
    var leftMButtonDownAssetOfficer = false;

    $(document).ready(function() {

        // Complainant Signature
        initComplainantSignatureCanvas();

        $('#btnSubmitComplainantSignature').click(function(e) {
            e.preventDefault();
            submitComplainantSignature();
        });

        $('#btnClearComplainantSignature').click(function(e) {
            e.preventDefault();
            initComplainantSignatureCanvas();
        });
        // End Complainant Signature

        // Asset Officer Signature
        initAssetOfficerSignatureCanvas();

        $('#btnSubmitAssetOfficerSignature').click(function(e) {
            e.preventDefault();
            submitAssetOfficerSignature();
        });

        $('#btnClearAssetOfficerSignature').click(function(e) {
            e.preventDefault();
            initAssetOfficerSignatureCanvas();
        });
        // End Asset Officer Signature


        $("#form").validate({
            rules: {
                names: {
                    required: true
                },
            },
            messages: {
                names: {
                    required: "Sila masukkan nama calon",
                },
            },
            submitHandler: function(form) {
                form.submit();
            }
        });
    });

    function submitComplainantSignature() {
        if (isComplainantSign) {
            let canvas = $("#complainant_canvas").get(0);
            let imgData = canvas.toDataURL();
            $('#complainant_signature').val(imgData);
        } else {
            alert('Please sign');
        }
    }

    function submitAssetOfficerSignature() {
        if (isAssetOfficerSign) {
            let canvas = $("#asset_officer_canvas").get(0);
            let imgData = canvas.toDataURL();
            $('#asset_officer_signature').val(imgData);
        } else {
            alert('Please sign');
        }
    }

    function initComplainantSignatureCanvas() {
        isComplainantSign = false;
        leftMButtonDownComplainant = false;

        //Set Canvas width
        var sizedWindowWidth = $(window).width();
        if (sizedWindowWidth > 700)
            sizedWindowWidth = $(window).width() / 2;
        else if (sizedWindowWidth > 400)
            sizedWindowWidth = sizedWindowWidth - 100;
        else
            sizedWindowWidth = sizedWindowWidth - 50;

        // custom
        var sizedWindowWidth = 300;

        $("#complainant_canvas").width(sizedWindowWidth);
        $("#complainant_canvas").height(200);
        $("#complainant_canvas").css("border", "1px solid lightgray");

        var complainantCanvas = $("#complainant_canvas").get(0);

        ComplainantCanvasContext = complainantCanvas.getContext('2d');

        if (ComplainantCanvasContext) {
            ComplainantCanvasContext.canvas.width = sizedWindowWidth;
            ComplainantCanvasContext.canvas.height = 200;
        }

        // Bind Mouse events
        $(complainantCanvas).on('mousedown', function(e) {
            if (e.which === 1) {
                leftMButtonDownComplainant = true;
                ComplainantCanvasContext.fillStyle = "#000";
                var x = e.pageX - $(e.target).offset().left;
                var y = e.pageY - $(e.target).offset().top;
                ComplainantCanvasContext.moveTo(x, y);
            }
            e.preventDefault();
            return false;
        });

        $(complainantCanvas).on('mouseup', function(e) {
            if (leftMButtonDownComplainant && e.which === 1) {
                leftMButtonDownComplainant = false;
                isComplainantSign = true;
            }
            e.preventDefault();
            return false;
        });

        // draw a line from the last point to this one
        $(complainantCanvas).on('mousemove', function(e) {
            if (leftMButtonDownComplainant == true) {
                ComplainantCanvasContext.fillStyle = "#000";
                var x = e.pageX - $(e.target).offset().left;
                var y = e.pageY - $(e.target).offset().top;
                ComplainantCanvasContext.lineTo(x, y);
                ComplainantCanvasContext.stroke();
            }
            e.preventDefault();
            return false;
        });

        //bind touch events
        $(complainantCanvas).on('touchstart', function(e) {
            leftMButtonDownComplainant = true;
            ComplainantCanvasContext.fillStyle = "#000";
            var t = e.originalEvent.touches[0];
            var x = t.pageX - $(e.target).offset().left;
            var y = t.pageY - $(e.target).offset().top;
            ComplainantCanvasContext.moveTo(x, y);

            e.preventDefault();
            return false;
        });

        $(complainantCanvas).on('touchmove', function(e) {
            ComplainantCanvasContext.fillStyle = "#000";
            var t = e.originalEvent.touches[0];
            var x = t.pageX - $(e.target).offset().left;
            var y = t.pageY - $(e.target).offset().top;
            ComplainantCanvasContext.lineTo(x, y);
            ComplainantCanvasContext.stroke();

            e.preventDefault();
            return false;
        });

        $(complainantCanvas).on('touchend', function(e) {
            if (leftMButtonDownComplainant) {
                leftMButtonDownComplainant = false;
                isComplainantSign = true;
            }
        });
    }

    function initAssetOfficerSignatureCanvas() {
        isAssetOfficerSign = false;
        leftMButtonDownAssetOfficer = false;

        //Set Canvas width
        var sizedWindowWidth = $(window).width();
        if (sizedWindowWidth > 700)
            sizedWindowWidth = $(window).width() / 2;
        else if (sizedWindowWidth > 400)
            sizedWindowWidth = sizedWindowWidth - 100;
        else
            sizedWindowWidth = sizedWindowWidth - 50;

        // custom
        var sizedWindowWidth = 300;

        $("#asset_officer_canvas").width(sizedWindowWidth);
        $("#asset_officer_canvas").height(200);
        $("#asset_officer_canvas").css("border", "1px solid lightgray");

        var canvasAssetOfficer = $("#asset_officer_canvas").get(0);

        canvasContextAssetOfficer = canvasAssetOfficer.getContext('2d');

        if (canvasContextAssetOfficer) {
            canvasContextAssetOfficer.canvas.width = sizedWindowWidth;
            canvasContextAssetOfficer.canvas.height = 200;
        }

        // Bind Mouse events
        $(canvasAssetOfficer).on('mousedown', function(e) {
            if (e.which === 1) {
                leftMButtonDownAssetOfficer = true;
                canvasContextAssetOfficer.fillStyle = "#000";
                var x = e.pageX - $(e.target).offset().left;
                var y = e.pageY - $(e.target).offset().top;
                canvasContextAssetOfficer.moveTo(x, y);
            }
            e.preventDefault();
            return false;
        });

        $(canvasAssetOfficer).on('mouseup', function(e) {
            if (leftMButtonDownAssetOfficer && e.which === 1) {
                leftMButtonDownAssetOfficer = false;
                isAssetOfficerSign = true;
            }
            e.preventDefault();
            return false;
        });

        // draw a line from the last point to this one
        $(canvasAssetOfficer).on('mousemove', function(e) {
            if (leftMButtonDownAssetOfficer == true) {
                canvasContextAssetOfficer.fillStyle = "#000";
                var x = e.pageX - $(e.target).offset().left;
                var y = e.pageY - $(e.target).offset().top;
                canvasContextAssetOfficer.lineTo(x, y);
                canvasContextAssetOfficer.stroke();
            }
            e.preventDefault();
            return false;
        });

        //bind touch events
        $(canvasAssetOfficer).on('touchstart', function(e) {
            leftMButtonDownAssetOfficer = true;
            canvasContextAssetOfficer.fillStyle = "#000";
            var t = e.originalEvent.touches[0];
            var x = t.pageX - $(e.target).offset().left;
            var y = t.pageY - $(e.target).offset().top;
            canvasContextAssetOfficer.moveTo(x, y);

            e.preventDefault();
            return false;
        });

        $(canvasAssetOfficer).on('touchmove', function(e) {
            canvasContextAssetOfficer.fillStyle = "#000";
            var t = e.originalEvent.touches[0];
            var x = t.pageX - $(e.target).offset().left;
            var y = t.pageY - $(e.target).offset().top;
            canvasContextAssetOfficer.lineTo(x, y);
            canvasContextAssetOfficer.stroke();

            e.preventDefault();
            return false;
        });

        $(canvasAssetOfficer).on('touchend', function(e) {
            if (leftMButtonDownAssetOfficer) {
                leftMButtonDownAssetOfficer = false;
                isAssetOfficerSign = true;
            }
        });
    }

</script>
