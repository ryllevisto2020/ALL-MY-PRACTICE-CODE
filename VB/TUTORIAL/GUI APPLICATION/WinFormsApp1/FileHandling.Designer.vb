<Global.Microsoft.VisualBasic.CompilerServices.DesignerGenerated()>
Partial Class FileHandling
    Inherits System.Windows.Forms.Form

    'Form overrides dispose to clean up the component list.
    <System.Diagnostics.DebuggerNonUserCode()>
    Protected Overrides Sub Dispose(ByVal disposing As Boolean)
        Try
            If disposing AndAlso components IsNot Nothing Then
                components.Dispose()
            End If
        Finally
            MyBase.Dispose(disposing)
        End Try
    End Sub

    'Required by the Windows Form Designer
    Private components As System.ComponentModel.IContainer

    'NOTE: The following procedure is required by the Windows Form Designer
    'It can be modified using the Windows Form Designer.  
    'Do not modify it using the code editor.
    <System.Diagnostics.DebuggerStepThrough()>
    Private Sub InitializeComponent()
        RichTextBox1 = New RichTextBox()
        OpenFileDialog1 = New OpenFileDialog()
        Button1 = New Button()
        Label1 = New Label()
        TextBox1 = New TextBox()
        Button2 = New Button()
        SaveFileDialog1 = New SaveFileDialog()
        SuspendLayout()
        ' 
        ' RichTextBox1
        ' 
        RichTextBox1.Location = New Point(12, 104)
        RichTextBox1.Name = "RichTextBox1"
        RichTextBox1.Size = New Size(458, 471)
        RichTextBox1.TabIndex = 0
        RichTextBox1.Text = ""
        ' 
        ' OpenFileDialog1
        ' 
        OpenFileDialog1.FileName = "OpenFileDialog1"
        ' 
        ' Button1
        ' 
        Button1.Location = New Point(395, 67)
        Button1.Name = "Button1"
        Button1.Size = New Size(75, 23)
        Button1.TabIndex = 1
        Button1.Text = "Open File"
        Button1.UseVisualStyleBackColor = True
        ' 
        ' Label1
        ' 
        Label1.AutoSize = True
        Label1.Location = New Point(12, 32)
        Label1.Name = "Label1"
        Label1.Size = New Size(28, 15)
        Label1.TabIndex = 2
        Label1.Text = "File:"
        ' 
        ' TextBox1
        ' 
        TextBox1.Enabled = False
        TextBox1.Location = New Point(46, 29)
        TextBox1.Name = "TextBox1"
        TextBox1.Size = New Size(424, 23)
        TextBox1.TabIndex = 3
        ' 
        ' Button2
        ' 
        Button2.Location = New Point(395, 581)
        Button2.Name = "Button2"
        Button2.Size = New Size(75, 23)
        Button2.TabIndex = 4
        Button2.Text = "Save File"
        Button2.UseVisualStyleBackColor = True
        ' 
        ' Form1
        ' 
        AutoScaleDimensions = New SizeF(7F, 15F)
        AutoScaleMode = AutoScaleMode.Font
        ClientSize = New Size(485, 611)
        Controls.Add(Button2)
        Controls.Add(TextBox1)
        Controls.Add(Label1)
        Controls.Add(Button1)
        Controls.Add(RichTextBox1)
        Name = "Form1"
        Text = "Form1"
        ResumeLayout(False)
        PerformLayout()
    End Sub

    Friend WithEvents RichTextBox1 As RichTextBox
    Friend WithEvents OpenFileDialog1 As OpenFileDialog
    Friend WithEvents Button1 As Button
    Friend WithEvents Label1 As Label
    Friend WithEvents TextBox1 As TextBox
    Friend WithEvents Button2 As Button
    Friend WithEvents SaveFileDialog1 As SaveFileDialog
End Class
