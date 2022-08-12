<div class="pop-up edit" id="edit"> 
    <div class="close-btn">
        &times;
    </div>
    <form class="form" method="POST" action="course-detail/module/{{$module->id}}" enctype="multipart/form-data">
        @method('put')
        @csrf
        <h2>Edit Course</h2>
        <div class="form-element">
            <label for="moduleName">Module Name</label> 
            <input type="text" id="moduleName" name="moduleName" placeholder="">
        </div>
        <div class="form-element">
            <label for="idCourse">ID Course</label> 
            <input type="text" id="idCourse" name="idCourse" value="{{ request()->courseId }}">
        </div>
        <div class="form-element">
            <label for="type" class="form-label">Type</label>
            <input type="text" id="type" name="type" placeholder="">
        </div>
        <div class="form-element">
            <label for="materi" class="form-label">Materi</label>
            <input type="text" id="materi" name="materi" placeholder="">
        </div>
        <div class="form-element">
            <label for="isSubscribe">Status Subscribe</label> 
            <input type="checkbox" name="isSubscribe">
        </div>

        <div class="form-element">
            <button type="submit">Update</button>
        </div>
    </form>
</div>