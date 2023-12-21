Imports System.IO

Public Class ListView
    Dim index_ As New index
    Dim id As Integer = 0
    <Obsolete>
    Private Sub Button1_Click(sender As Object, e As EventArgs) Handles Button1.Click

        Try
            id = id + Convert.ToInt32(ListView1.Items(0).SubItems(0).Text)
        Catch ex As Exception
            id = 1
        End Try

        Dim data As String() = {id, TextBox1.Text, TextBox2.Text, TextBox3.Text}
        Dim ListViewItem2 As ListViewItem = New ListViewItem(data, -1)

        If TextBox1.Text.Equals("") Or TextBox2.Text.Equals("") Or TextBox3.Text.Equals("") Then
            MsgBox("Please fill up the form!")
            id = id - 1
        Else
            ListView1.Items.AddRange(New ListViewItem() {ListViewItem2})
            Dim file_ As New FileInfo("data.txt")
            If file_.Exists Then
            Else
                file_.Create().Close()
            End If

            Dim stream_writer As StreamWriter = New StreamWriter("data.txt")

            For index = 0 To ListView1.Items.Count - 1
                stream_writer.Write(ListView1.Items(index).SubItems(0).Text + "," + ListView1.Items(index).SubItems(1).Text + "," + ListView1.Items(index).SubItems(2).Text + "," + ListView1.Items(index).SubItems(3).Text + vbNewLine)
            Next
            stream_writer.Close()
            TextBox1.Text = ""
            TextBox2.Text = ""
            TextBox3.Text = ""
        End If
    End Sub

    Private Sub Button2_Click(sender As Object, e As EventArgs) Handles Button2.Click
        If index_.isbool = False Then
            MsgBox("No Data Selected!")
        Else
            If MsgBox("Are you sure want to delete!", MsgBoxStyle.OkCancel) = MsgBoxResult.Ok Then
                ListView1.Items(index_.index).Remove()
                Dim stream_writer As StreamWriter = New StreamWriter("data.txt")

                For index = 0 To ListView1.Items.Count - 1
                    stream_writer.Write(ListView1.Items(index).SubItems(0).Text + "," + ListView1.Items(index).SubItems(1).Text + "," + ListView1.Items(index).SubItems(2).Text + "," + ListView1.Items(index).SubItems(3).Text + vbNewLine)
                Next
                stream_writer.Close()
                TextBox1.Text = ""
                TextBox2.Text = ""
                TextBox3.Text = ""
                index_.isbool = False
            End If
        End If

    End Sub

    Private Sub ListView1_Click(sender As Object, e As EventArgs) Handles ListView1.Click
        index_.index = ListView1.SelectedItems(0).Index
        index_.isbool = True
        TextBox1.Text = ListView1.SelectedItems(0).SubItems(1).Text
        TextBox2.Text = ListView1.SelectedItems(0).SubItems(2).Text
        TextBox3.Text = ListView1.SelectedItems(0).SubItems(3).Text
    End Sub

    Private Sub Button3_Click(sender As Object, e As EventArgs) Handles Button3.Click
        'ListView1.Items(0).SubItems(3).Text = "testsetset"
        If index_.isbool = False Then
            MsgBox("No Data Selected!")
        Else
            If MsgBox("Are you sure want to update!", MsgBoxStyle.OkCancel) = MsgBoxResult.Ok Then
                ListView1.Items(index_.index).SubItems(1).Text = TextBox1.Text
                ListView1.Items(index_.index).SubItems(2).Text = TextBox2.Text
                ListView1.Items(index_.index).SubItems(3).Text = TextBox3.Text
                Dim stream_writer As StreamWriter = New StreamWriter("data.txt")

                For index = 0 To ListView1.Items.Count - 1
                    stream_writer.Write(ListView1.Items(index).SubItems(0).Text + "," + ListView1.Items(index).SubItems(1).Text + "," + ListView1.Items(index).SubItems(2).Text + "," + ListView1.Items(index).SubItems(3).Text + vbNewLine)
                Next
                stream_writer.Close()
                TextBox1.Text = ""
                TextBox2.Text = ""
                TextBox3.Text = ""
                index_.isbool = False
            End If
        End If
    End Sub

    Private Sub Label4_Click(sender As Object, e As EventArgs) Handles Label4.Click

    End Sub

    <Obsolete>
    Private Sub ListView_Load(sender As Object, e As EventArgs) Handles MyBase.Load
        Dim test As String = "1,awd,awd;" + vbNewLine + "1,awd,awd;"
        Dim test_split As String() = test.ToString.Split(";")
        For index = 0 To test_split.Count - 2
            MsgBox("awd")
        Next
    End Sub
End Class
Class index
    Private _index As Integer
    Private _isboole As Boolean = False
    Public Property index As Integer
        Get
            Return _index
        End Get
        Set
            _index = Value
        End Set
    End Property

    Public Property isbool As Integer
        Get
            Return _isboole
        End Get
        Set
            _isboole = Value
        End Set
    End Property
End Class
