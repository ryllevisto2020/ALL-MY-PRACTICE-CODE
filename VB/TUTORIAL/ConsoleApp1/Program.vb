Imports System
Imports System.IO
Imports System.Net
Imports System.Text

Module Program
    <Obsolete>
    Sub Main(args As String())
        Dim web_client As WebClient = New WebClient()
        Dim data As Stream = web_client.OpenRead("http://localhost:3000/post?username=admin&password=admin")
        Dim data_reader As StreamReader = New StreamReader(data)
        Dim data_line As String = ""
        data_line = data_reader.ReadLine()
        Dim data_builder As New StringBuilder()
        Try
            While data_line.Length > 0
                data_builder.Append(data_line + vbNewLine)
                data_line = data_reader.ReadLine()
            End While
        Catch ex As Exception

        End Try
        Console.WriteLine(data_builder)
    End Sub
End Module
