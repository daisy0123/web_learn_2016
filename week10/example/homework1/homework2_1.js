function disp(file1) {
    win1 = window.open("", "display", "toolbar=no,location=no,width=500,height=400,resizable=yes")
    win1.location.href = "disp.php?file1=" + file1
}

function dele(file1) {
    win1 = window.open("", "dele", "toolbar=no,location=no,width=500,height=400,resizable=yes")
    win1.location.href = "dele.php?file1=" + file1
    win1.window.close()
    setTimeout("", 1000)
    location.href = "homework2_1.php"

}

function ren(file1) {
    win1 = window.open("", "rename", "toolbar=no,location=no,width=500,height=300,resizable=yes")
    win1.location.href = "ren.php?file1=" + file1
}

function edit(file1) {
    win1 = window.open("", "edit", "toolbar=no,location=no,width=800,height=400,resizable=yes")
    win1.location.href = "edit.php?file1=" + file1
}

