Imports System.IO
Imports System.Text

Public Class FileHandling
    Dim dir As New DirectoryInfo(vbEmpty)
    Dim length_ As Integer = dir.FullName.Length
    Private Sub Label1_Click(sender As Object, e As EventArgs) Handles Label1.Click

    End Sub

    Private Sub Button1_Click(sender As Object, e As EventArgs) Handles Button1.Click
        OpenFileDialog1.InitialDirectory = dir.FullName.Remove(length_ - 1)
        If OpenFileDialog1.ShowDialog = DialogResult.OK Then
            TextBox1.Text = OpenFileDialog1.FileName
            Dim stream_reader As StreamReader = New StreamReader(OpenFileDialog1.OpenFile)
            RichTextBox1.Text = stream_reader.ReadToEnd
            stream_reader.Close()
        End If
    End Sub

    Private Sub Button2_Click(sender As Object, e As EventArgs) Handles Button2.Click
        SaveFileDialog1.InitialDirectory = dir.FullName.Remove(length_ - 1)
        SaveFileDialog1.Filter = "Text files (*.txt)|*.txt"
        If SaveFileDialog1.ShowDialog = DialogResult.OK Then
            Dim file_ As New FileInfo(SaveFileDialog1.FileName)
            file_.Create().Close()

            Dim stream_ As Stream = file_.OpenWrite
            Dim stream_writer As StreamWriter = New StreamWriter(stream_)
            Dim string_builder As New StringBuilder
            string_builder.Append(RichTextBox1.Text)
            stream_writer.Write(string_builder.ToString)
            stream_writer.Close()
        End If
    End Sub
End Class
