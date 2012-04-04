<%@ Page Language="C#" AutoEventWireup="true" CodeBehind="json.aspx.cs" Inherits="WIDGaTserver.json" %>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title></title>
</head>
<body>
    <form id="form1" runat="server">
    <div>
        <asp:RadioButtonList ID="format" runat="server">
            <asp:ListItem Selected="True">json</asp:ListItem>
            <asp:ListItem>html</asp:ListItem>
        </asp:RadioButtonList>
        &nbsp;Verb: &nbsp;<asp:TextBox 
            ID="verb" runat="server" Width="200px"></asp:TextBox>&nbsp;&nbsp;&nbsp;
        Name:&nbsp;<asp:TextBox ID="name" runat="server" Width="200px"></asp:TextBox>&nbsp;&nbsp;    
        <br />
        Value:&nbsp;<asp:TextBox ID="value" runat="server" 
            Height="400px" Width="960px" TextMode="MultiLine" Rows="20"></asp:TextBox><br /> 
        <br />
        <asp:Button ID="Submit" runat="server" Text="Go" /><br />
        <asp:literal id="literal1" runat="server"></asp:literal>
        <br />
    </div>
    </form>
</body>
</html>
