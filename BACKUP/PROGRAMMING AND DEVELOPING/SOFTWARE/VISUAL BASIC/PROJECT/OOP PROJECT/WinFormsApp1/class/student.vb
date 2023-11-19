Public Class student
    Private ReadOnly _fullname As String
    Public Property fname As String
    Public Property mname As String
    Public Property lname As String
    Public ReadOnly Property fullname(course As String, section As String) As String
        Get
            Return fname & " " & mname & " " & lname & Environment.NewLine & "FROM COURSE: " & course & "SECTION: " & section
        End Get
    End Property

    Private Property fname1 As String

End Class
Public Class section
    Inherits student
    Public Property course As String
    Public Property sec As String
End Class
