<%@ Page Language="C#" AutoEventWireup="true" CodeBehind="WIDGatService.aspx.cs" Inherits="WIDGaTserver.WIDGatService" %>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title></title>
</head>
<body>
    <form id="form1" runat="server">
    <div>
        Verb: &nbsp;<asp:TextBox ID="verb" runat="server" Width="313px"></asp:TextBox><br />
        Name:&nbsp;<asp:TextBox ID="name" runat="server" Width="314px"></asp:TextBox><br />
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
