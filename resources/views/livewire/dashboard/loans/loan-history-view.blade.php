<div>
    <div class="content-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    @if(!empty($loan_requests->toArray()))
                    <div>
                        @role('user')
                        <div style="background-color:#792db8;@role('user') @else margin-top:2%; padding:2%; @endrole " class="card-header">
                            <h4 class="card-title" style=" color:#f0f0f0">
                                <svg version="1.1" id="Uploaded to svgrepo.com" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="35" height="35" viewBox="0 0 32 32" xml:space="preserve" fill="#af83c3" stroke="#af83c3" stroke-width="0.48">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"/>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/>
                                    <g id="SVGRepo_iconCarrier"> <style type="text/css"> .feather_een{fill:#ffffff;} </style> <path class="feather_een" d="M3,11c0-0.552,0.448-1,1-1s1,0.448,1,1c0,0.552-0.448,1-1,1S3,11.552,3,11z M4,22c0.552,0,1-0.448,1-1 c0-0.552-0.448-1-1-1s-1,0.448-1,1C3,21.552,3.448,22,4,22z M28,10c-0.552,0-1,0.448-1,1c0,0.552,0.448,1,1,1s1-0.448,1-1 C29,10.448,28.552,10,28,10z M21,16c0,3.314-1.686,6-5,6s-5-2.686-5-6s1.686-6,5-6S21,12.686,21,16z M20,16c0-2.417-1.051-5-4-5 s-4,2.583-4,5c0,2.417,1.051,5,4,5S20,18.417,20,16z M28,20c-0.552,0-1,0.448-1,1c0,0.552,0.448,1,1,1s1-0.448,1-1 C29,20.448,28.552,20,28,20z M31,12.28V22c0,1.105-0.895,2-2,2h-9.686l-6.849,6.849c-0.391,0.391-0.902,0.586-1.414,0.586 s-1.024-0.195-1.414-0.586l-6.873-6.873c-0.923-0.11-1.647-0.844-1.742-1.771C0.432,21.481,0.425,20.451,1,19.72V10 c0-1.105,0.895-2,2-2h9.686l6.849-6.849c0.391-0.391,0.902-0.586,1.414-0.586s1.024,0.195,1.414,0.586l6.873,6.873 c0.923,0.11,1.647,0.843,1.742,1.771C31.568,10.519,31.575,11.549,31,12.28z M14.101,8h13.698l-6.142-6.142 c-0.189-0.189-0.44-0.293-0.707-0.293s-0.518,0.104-0.707,0.293L14.101,8z M17.899,24H4.201l6.142,6.142 c0.189,0.189,0.44,0.293,0.707,0.293c0.267,0,0.518-0.104,0.707-0.293L17.899,24z M30,10c0-0.551-0.449-1-1-1H3 c-0.551,0-1,0.449-1,1v12c0,0.551,0.449,1,1,1h26c0.551,0,1-0.449,1-1V10z"/> </g>
                                    </svg>
                                My Previous Loans
                            </h4>
                        </div>
                        @endrole
                        <div class="pb-0 card-body" style="padding-bottom: 30%">
                            @include('livewire.dashboard.loans.__parts.list-loan-request')
                        </div>
                    </div>
                    @else
                        {{-- Illustrate No Loan --}}
                        <div class="container m-12 d-flex justify-content-center align-items-center">
                            <div class="text-center col-12">
                                <img width="300" src="{{ asset('mfs/admin/assets/media/illustrations/sigma-1/loan.png')}}" alt="">
                                @role('user')
                                <div class="my-4">
                                    <a href="{{ route('new-loan') }}" class="btn btn-primary text-white">
                                        Get a Loan
                                    </a>
                                </div>

                                <div class="mt-3 text-center col-12">
                                    <p class="text-muted">Need help or have questions? <a href="{{ route('contact') }}">Contact us</a>.</p>
                                </div>
                                @endrole
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>

        <script language = "javascript" type = "text/javascript">
            document.getElementById("loaderloanrequest").style.display = "none";
            document.getElementById("validbasicpayl2").style.display = "none";
            document.getElementById("validnetpayl2").style.display = "none";
            document.getElementById("validprincipal2").style.display = "none";
        </script>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.debug.js" integrity="sha384-NaWTHo/8YCBYJ59830LTz/P4aQZK1sS0SneOgAvhsIl3zBu8r9RevNg5lHCHAuQ/" crossorigin="anonymous"></script>
        <!-- html2canvas library -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.3.2/html2canvas.min.js"></script>

        <script type="text/javascript">
            $(document).ready(function (e) {
                $('#prof_image_create').change(function(){
                    let reader = new FileReader();
                    reader.onload = (e) => {
                        $('#preview-image-before-upload_create').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(this.files[0]);
                });
            });

            function printLoansTable(){
                $('.actions-btns').hide();
                // Get the HTML element that you want to convert to PDF
                const element = document.getElementById('loans_table_print_view');
                var pdfWidth = 210; // mm
                var pdfHeight = 297; // mm
                // Create a new jsPDF instance
                const doc = new jsPDF('landscape');
                // Use the html2canvas library to render the element as a canvas
                html2canvas(element).then(canvas => {
                    // Convert the canvas to an image data URL
                    const imgData = canvas.toDataURL('image/png');
                    // Add the image data URL to the PDF document
                    doc.addImage(
                        imgData,
                        'PNG',
                        2, // x-coordinate
                        2, // y-coordinate
                    );

                    // Save the PDF document
                    doc.save('All Loans.pdf');

                    $('.actions-btns').show();
                });
            }
        </script>
    </div>

</div>
