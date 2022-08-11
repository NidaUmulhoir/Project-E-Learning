<div class="pop-up add">
    <div class="close-btn">
        &times;
    </div>
    <form class="form" method="POST" action="module" enctype="multipart/form-data">
        @csrf
        <h2>Add New Course</h2>
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
            <label for="courseName">Status Subscribe</label> 
            <input type="checkbox" name="isSubscribe">
        </div>

        <div class="form-element">
            <button type="submit">Add New</button>
        </div>
    </form>
</div>