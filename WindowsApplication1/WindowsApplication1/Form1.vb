Imports MySql.Data.MySqlClient
Public Class Form1

    Dim ServerString As String = "Server=projetos.epcjc.net;User Id=i11880;Password=zeKnawb9;Database=i11880"

    Private Sub Button1_Click(sender As Object, e As EventArgs) Handles Button1.Click

        If TextBox1.Text = My.Settings.username And TextBox2.Text = My.Settings.password Then
            MsgBox("Acesso Confirmado", vbInformation)
            Form2.Show()
            Me.Hide()
        Else
            MsgBox("Acesso Negado", vbExclamation)
        End If
    End Sub

    Private Sub CheckBox1_CheckedChanged(sender As Object, e As EventArgs) Handles CheckBox1.CheckedChanged

        If CheckBox1.Checked = True Then
            My.Settings.check = True
        Else
            My.Settings.check = False
        End If

        My.Settings.username = TextBox1.Text
        My.Settings.password = TextBox2.Text
        My.Settings.Save()
        TextBox1.Focus()
    End Sub

    Private Sub Form1_Load(sender As Object, e As EventArgs) Handles MyBase.Load

        Dim SQLConnection As MySqlConnection = New MySqlConnection

        SQLConnection.ConnectionString = ServerString

    End Sub

    Private Sub Button2_Click(sender As Object, e As EventArgs) Handles Button2.Click

        End
    End Sub
End Class
