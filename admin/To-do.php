<?php
require_once '../Backend/config.php';
?>
<div class="h-[80%] w-[90%] dark:text-gray-300 rounded p-2  ">
    <h2 class="text-2xl font-bold mx-4 mb-4">To-Do List</h2>
    <form class="mb-4">
        <input type="text" id="task" name="task" autocomplete="" placeholder="Enter task" required class="w-3/4 px-4 py-2 bg-gray-100 dark:bg-slate-700 border border-gray-300 rounded-md focus:outline-none focus:border-green-500">
        <button onclick="return addTask('<?php echo $_SESSION['admin'] ?>')" type="button" class="ml-2 px-4 py-2 bg-green-500 hover:bg-green-600 dark:bg-green-600 dark:hover:bg-green-700 duration-300 text-white font-semibold rounded-md">Add Task</button>
        <span id="spantask" class="text-sm text-red-500"></span>
    </form>
    <input type="hidden" name="taskstatus" id="taskstatus">

    <h3 class="text-lg font-bold mx-4 mb-2">Tasks:</h3>
    <ul class="mt-4 h-36 overflow-y-auto">
        <?php
        // Display existing tasks
        $sql = "SELECT * FROM task_detail where user_id=" . $_SESSION['admin'] . "";
        $result = mysqli_query($con, $sql);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<li class="mb-2 w-full bg-gray-100 dark:bg-slate-700 py-2 rounded flex justify-between items-center px-4">' . $row['task'] . ' <button onclick="deleteTask(' . $row['task_id'] . ', ' . $row['user_id'] . ')" class="delete-btn ml-2 px-4 py-1 bg-red-500 hover:bg-red-600 dark:bg-red-600 dark:hover:bg-red-700 duration-300 text-white font-semibold rounded">Delete</button></li>';
            }
        } else {
            echo '<li class="mb-2">No tasks yet.</li>';
        }
        ?>
    </ul>
</div>
<?php ?>