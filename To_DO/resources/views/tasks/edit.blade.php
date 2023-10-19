<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href = "{{ asset('css/edit.css') }}" rel="stylesheet" >
</head>
<body class="background-image">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <div class="d-flex align-items-center justify-content-center">
        <div> class="container">
            <form action="{{route('tasks.update',['task'=>$task])}}" method="post" class="needs-validation form">
                @csrf
                @method('put')
                <div class="form_front">
                    <div class="form_details">
                        Edit the Task
                    </div>
                        <label for="validationCustom03" class="form-label"></label>    
                        <input class="input form-control custom-input @error('task') is-invalid @enderror" type="text" name="task" placeholder="Edit the Task" value="{{$task -> tasks}}" id="validationCustom03">

                        @error('task')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                
                    </br>
                    <div class="btn-inp">
                        <input class="btn text-center" type="submit" value="Update" >
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

<script>
    (() => {
        'use strict';

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        const forms = document.querySelectorAll('.needs-validation');

        // Loop over them and prevent submission
        Array.from(forms).forEach(form => {
            form.addEventListener('submit', event => {
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                    // This line is added to display the Bootstrap validation error messages
                    form.classList.add('was-validated');
                }
            }, false);
        });

        const taskInput = document.querySelector("#validationCustom03");
        
        taskInput.addEventListener("input", function () {
            // Clear the error message and add success styles when input changes
            taskInput.classList.remove("is-invalid");
            taskInput.classList.add("is-valid");
            const errorFeedback = document.querySelector(".invalid-feedback");
            if (errorFeedback) {
                errorFeedback.style.display = "none";
            }
        });
    })();
</script>
</html>