<!DOCTYPE html>
<html>
<head>
    <title>Student Planner</title>
    <style>
        body {
            margin: 0;
            font-family: "Segoe UI", Arial, sans-serif;
            background: linear-gradient(135deg, #6dd5ed, #2193b0);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .planner-container {
            background: #111;
            padding: 40px 35px;
            border-radius: 16px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.25);
            width: 420px;
            animation: fadeIn 0.8s ease-in-out;
        }
        h2 {
            text-align: center;
            margin-bottom: 25px;
            color: #21c2f0;
            font-size: 24px;
        }
        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }
        input {
            width: 100%;
            padding: 14px 12px;
            border-radius: 8px;
            border: 1px solid #333;
            background: #222;
            color: #eee;
            font-size: 15px;
            transition: 0.3s;
        }
        input::placeholder {
            color: #888;
        }
        input:focus {
            border-color: #21c2f0;
            box-shadow: 0 0 6px #21c2f0;
            outline: none;
        }
        button {
            width: 100%;
            padding: 14px;
            background: #21c2f0;
            border: none;
            border-radius: 8px;
            color: white;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s;
        }
        button:hover {
            background: #199ab8;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>
    <div class="planner-container">
        <h2>📘 Student Planner</h2>
        <form method="POST" action="db.php">
            <input type="text" name="student_name" placeholder="👤 Student Name" required>
            <input type="text" name="subject" placeholder="📖 Subject" required>
            <input type="text" name="task" placeholder="📝 Task" required>
            <input type="date" name="due_date" required>
            <button type="submit">✅ Save Task</button>
        </form>
    </div>
</body>
</html>
