Module Module1
    Dim student1 As New student
    Dim section As New section
    Public Sub student()
        student1.fname = "Rylle John Paul"
        student1.mname = "Umbrero"
        student1.lname = "Visto"

        section.course = "BSIT"
        section.sec = "2126"

        MsgBox(student1.fullname(section.course, section.sec))
    End Sub
End Module
