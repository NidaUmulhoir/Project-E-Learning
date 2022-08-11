<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/dashboard.css" rel="stylesheet">
    <link href="/css/course.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <title>Document</title>
</head>
<body>
    @include('dashboard.layouts.sidebar')
    @include('dashboard.layouts.header')
    <div class="main-content">
        <h2>Add New Module</h2>
        <button class="add-data">Add New</button>
        <div class="table-course">
            <table>
                <thead>
                    <tr>
                        <td class="title id">ID</td>
                        <td class="title pass">Module</td>
                        <td class="title course">Materi</td>
                        <td class="title description">Type</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($modules as $module)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $module->moduleName }}</td>
                        <td>{{ $module->materi }}</td>
                        <td>{{ $module->type }}</td>
                        <td class="action">
                            <button class="edit-data"><i class='bx bxs-edit'></i></button>
                            <form action="course/{{$module->id}}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="delete-data" onclick="return confirm('Are you sure?')"><i class='bx bxs-x-square'></i></button>
                              </form>
                            {{-- <button class="delete-data"><i class='bx bxs-x-square'></i></button> --}}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @include('dashboard.module.create')
        {{-- @include('dashboard.module.edit') --}}
        {{-- @include('dahsboard.module.delete') --}}
    </div>
</body>
<script>
    document.querySelector(".add-data").addEventListener("click",function(){
        document.querySelector(".pop-up.add").classList.add("active");
    });
    document.querySelector(".pop-up.add .close-btn").addEventListener("click",function(){
        document.querySelector(".pop-up.add").classList.remove("active");
    });
    document.querySelector(".edit-data").addEventListener("click",function(){
        document.querySelector(".pop-up.edit").classList.add("active");
    });
    document.querySelector(".pop-up.edit .close-btn").addEventListener("click",function(){
        document.querySelector(".pop-up.edit").classList.remove("active");
    });
    // document.querySelector(".pop-up.del").addEventListener("click",function(){
    //     document.querySelector(".pop-up.del").classList.add("active");
    // });
    // document.querySelector(".pop-up.del").addEventListener("click",function(){
    //     document.querySelector(".pop-up.del").classList.add("active");
    // });
    
</script>

</html>