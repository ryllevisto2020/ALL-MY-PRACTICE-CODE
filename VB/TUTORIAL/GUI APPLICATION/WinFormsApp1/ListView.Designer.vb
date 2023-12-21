<Global.Microsoft.VisualBasic.CompilerServices.DesignerGenerated()> _
Partial Class ListView
    Inherits System.Windows.Forms.Form

    'Form overrides dispose to clean up the component list.
    <System.Diagnostics.DebuggerNonUserCode()> _
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
    <System.Diagnostics.DebuggerStepThrough()> _
    Private Sub InitializeComponent()
        Dim ListViewItem1 As ListViewItem = New ListViewItem(New String() {"1", "awd", "awd", "awd"}, -1)
        ListView1 = New Windows.Forms.ListView()
        ColumnHeader1 = New ColumnHeader()
        ColumnHeader2 = New ColumnHeader()
        ColumnHeader3 = New ColumnHeader()
        ColumnHeader4 = New ColumnHeader()
        Button1 = New Button()
        TextBox1 = New TextBox()
        TextBox2 = New TextBox()
        TextBox3 = New TextBox()
        Label1 = New Label()
        Label2 = New Label()
        Label3 = New Label()
        Button2 = New Button()
        Button3 = New Button()
        Label4 = New Label()
        TextBox4 = New TextBox()
        SuspendLayout()
        ' 
        ' ListView1
        ' 
        ListView1.Activation = ItemActivation.OneClick
        ListView1.Columns.AddRange(New ColumnHeader() {ColumnHeader1, ColumnHeader2, ColumnHeader3, ColumnHeader4})
        ListView1.FullRowSelect = True
        ListView1.Items.AddRange(New ListViewItem() {ListViewItem1})
        ListView1.Location = New Point(12, 12)
        ListView1.Name = "ListView1"
        ListView1.Size = New Size(598, 426)
        ListView1.TabIndex = 0
        ListView1.UseCompatibleStateImageBehavior = False
        ListView1.View = View.Details
        ' 
        ' ColumnHeader1
        ' 
        ColumnHeader1.Text = "ID"
        ColumnHeader1.Width = 80
        ' 
        ' ColumnHeader2
        ' 
        ColumnHeader2.Text = "First Name"
        ColumnHeader2.Width = 171
        ' 
        ' ColumnHeader3
        ' 
        ColumnHeader3.Text = "Middle Name"
        ColumnHeader3.Width = 171
        ' 
        ' ColumnHeader4
        ' 
        ColumnHeader4.Text = "Last Name"
        ColumnHeader4.Width = 171
        ' 
        ' Button1
        ' 
        Button1.Location = New Point(620, 231)
        Button1.Name = "Button1"
        Button1.Size = New Size(75, 23)
        Button1.TabIndex = 1
        Button1.Text = "Save"
        Button1.UseVisualStyleBackColor = True
        ' 
        ' TextBox1
        ' 
        TextBox1.Location = New Point(616, 94)
        TextBox1.Name = "TextBox1"
        TextBox1.Size = New Size(172, 23)
        TextBox1.TabIndex = 2
        ' 
        ' TextBox2
        ' 
        TextBox2.Location = New Point(616, 148)
        TextBox2.Name = "TextBox2"
        TextBox2.Size = New Size(172, 23)
        TextBox2.TabIndex = 2
        ' 
        ' TextBox3
        ' 
        TextBox3.Location = New Point(616, 202)
        TextBox3.Name = "TextBox3"
        TextBox3.Size = New Size(172, 23)
        TextBox3.TabIndex = 2
        ' 
        ' Label1
        ' 
        Label1.AutoSize = True
        Label1.Location = New Point(616, 71)
        Label1.Name = "Label1"
        Label1.Size = New Size(64, 15)
        Label1.TabIndex = 3
        Label1.Text = "First Name"
        ' 
        ' Label2
        ' 
        Label2.AutoSize = True
        Label2.Location = New Point(616, 125)
        Label2.Name = "Label2"
        Label2.Size = New Size(79, 15)
        Label2.TabIndex = 3
        Label2.Text = "Middle Name"
        ' 
        ' Label3
        ' 
        Label3.AutoSize = True
        Label3.Location = New Point(616, 179)
        Label3.Name = "Label3"
        Label3.Size = New Size(63, 15)
        Label3.TabIndex = 3
        Label3.Text = "Last Name"
        ' 
        ' Button2
        ' 
        Button2.Location = New Point(713, 231)
        Button2.Name = "Button2"
        Button2.Size = New Size(75, 23)
        Button2.TabIndex = 4
        Button2.Text = "Remove"
        Button2.UseVisualStyleBackColor = True
        ' 
        ' Button3
        ' 
        Button3.Location = New Point(664, 260)
        Button3.Name = "Button3"
        Button3.Size = New Size(75, 23)
        Button3.TabIndex = 5
        Button3.Text = "Update"
        Button3.UseVisualStyleBackColor = True
        ' 
        ' Label4
        ' 
        Label4.AutoSize = True
        Label4.Location = New Point(616, 14)
        Label4.Name = "Label4"
        Label4.Size = New Size(64, 15)
        Label4.TabIndex = 7
        Label4.Text = "First Name"
        ' 
        ' TextBox4
        ' 
        TextBox4.Enabled = False
        TextBox4.Location = New Point(616, 37)
        TextBox4.Name = "TextBox4"
        TextBox4.Size = New Size(172, 23)
        TextBox4.TabIndex = 6
        ' 
        ' ListView
        ' 
        AutoScaleDimensions = New SizeF(7.0F, 15.0F)
        AutoScaleMode = AutoScaleMode.Font
        ClientSize = New Size(800, 450)
        Controls.Add(Label4)
        Controls.Add(TextBox4)
        Controls.Add(Button3)
        Controls.Add(Button2)
        Controls.Add(Label3)
        Controls.Add(Label2)
        Controls.Add(Label1)
        Controls.Add(TextBox3)
        Controls.Add(TextBox2)
        Controls.Add(TextBox1)
        Controls.Add(Button1)
        Controls.Add(ListView1)
        Name = "ListView"
        Text = "ListView"
        ResumeLayout(False)
        PerformLayout()
    End Sub

    Friend WithEvents ListView1 As Windows.Forms.ListView
    Friend WithEvents ColumnHeader1 As ColumnHeader
    Friend WithEvents ColumnHeader2 As ColumnHeader
    Friend WithEvents ColumnHeader3 As ColumnHeader
    Friend WithEvents ColumnHeader4 As ColumnHeader
    Friend WithEvents Button1 As Button
    Friend WithEvents TextBox1 As TextBox
    Friend WithEvents TextBox2 As TextBox
    Friend WithEvents TextBox3 As TextBox
    Friend WithEvents Label1 As Label
    Friend WithEvents Label2 As Label
    Friend WithEvents Label3 As Label
    Friend WithEvents Button2 As Button
    Friend WithEvents Button3 As Button
    Friend WithEvents Label4 As Label
    Friend WithEvents TextBox4 As TextBox
End Class
