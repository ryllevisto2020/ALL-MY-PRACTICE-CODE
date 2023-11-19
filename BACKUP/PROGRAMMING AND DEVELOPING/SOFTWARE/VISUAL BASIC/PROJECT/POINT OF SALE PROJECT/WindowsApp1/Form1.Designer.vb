<Global.Microsoft.VisualBasic.CompilerServices.DesignerGenerated()>
Partial Class Form1
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
        Me.Panel25 = New System.Windows.Forms.Panel()
        Me.ElementHost2 = New System.Windows.Forms.Integration.ElementHost()
        Me.Panel25.SuspendLayout()
        Me.SuspendLayout()
        '
        'Panel25
        '
        Me.Panel25.Controls.Add(Me.ElementHost2)
        Me.Panel25.Location = New System.Drawing.Point(12, 12)
        Me.Panel25.Name = "Panel25"
        Me.Panel25.Size = New System.Drawing.Size(1038, 738)
        Me.Panel25.TabIndex = 7
        '
        'ElementHost2
        '
        Me.ElementHost2.Location = New System.Drawing.Point(222, 325)
        Me.ElementHost2.Name = "ElementHost2"
        Me.ElementHost2.Size = New System.Drawing.Size(8, 8)
        Me.ElementHost2.TabIndex = 1
        Me.ElementHost2.Text = "ElementHost2"
        Me.ElementHost2.Child = Nothing
        '
        'Form1
        '
        Me.AutoScaleDimensions = New System.Drawing.SizeF(6.0!, 13.0!)
        Me.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font
        Me.ClientSize = New System.Drawing.Size(1062, 762)
        Me.Controls.Add(Me.Panel25)
        Me.MinimumSize = New System.Drawing.Size(1078, 801)
        Me.Name = "Form1"
        Me.Text = "Form1"
        Me.Panel25.ResumeLayout(False)
        Me.ResumeLayout(False)

    End Sub

    Friend WithEvents Panel25 As Panel
    Friend WithEvents ElementHost2 As Integration.ElementHost
End Class
