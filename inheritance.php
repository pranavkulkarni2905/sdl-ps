<?php
// Faculty class
class Faculty {
    protected $subject;
    protected $examDate;
    protected $examTime;
    protected $problemStatements = array(
        "Program for bubble sort",
        "Program for merge sort"
    );

    public function __construct($subject, $examDate, $examTime) {
        $this->subject = $subject;
        $this->examDate = $examDate;
        $this->examTime = $examTime;
    }

    public function getSubject() {
        return $this->subject;
    }

    public function getExamDateTime() {
        return $this->examDate . " at " . $this->examTime;
    }

    public function getProblemStatements() {
        return $this->problemStatements;
    }
}

// Student class inheriting from Faculty class
class Student extends Faculty {
    protected $allocatedProblemStatement;

    public function __construct($subject, $examDate, $examTime) {
        parent::__construct($subject, $examDate, $examTime);
        $this->allocateProblemStatement();
    }

    public function allocateProblemStatement() {
        $problemStatements = parent::getProblemStatements();
        // Allocate one problem statement randomly to the student
        $this->allocatedProblemStatement = $problemStatements[array_rand($problemStatements)];
    }

    public function getAllocatedProblemStatement() {
        return $this->allocatedProblemStatement;
    }
}

// Create a Faculty object
$faculty = new Faculty("DAA", "2024-05-01", "10:00 AM");

// Create a Student object
$student = new Student("DAA", "2024-05-01", "10:00 AM");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faculty Page</title>
    <style>
        /* Professional level CSS styles */
        body {
            font-family: Arial, sans-serif;
        }
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Faculty Page</h1>
    <table>
        <tr>
            <th>Subject</th>
            <td><?php echo $faculty->getSubject(); ?></td>
        </tr>
        <tr>
            <th>Exam Date & Time</th>
            <td><?php echo $faculty->getExamDateTime(); ?></td>
        </tr>
        <tr>
            <th>Problem Statements</th>
            <td>
                <ul>
                    <?php foreach ($faculty->getProblemStatements() as $statement) : ?>
                        <li><?php echo $statement; ?></li>
                    <?php endforeach; ?>
                </ul>
            </td>
        </tr>
    </table>

    <hr>

    <h1>Student Page</h1>
    <table>
        <tr>
            <th>Subject</th>
            <td><?php echo $student->getSubject(); ?></td>
        </tr>
        <tr>
            <th>Exam Date & Time</th>
            <td><?php echo $student->getExamDateTime(); ?></td>
        </tr>
        <tr>
            <th>Allocated Problem Statement</th>
            <td><?php echo $student->getAllocatedProblemStatement(); ?></td>
        </tr>
    </table>
</body>
</html>
