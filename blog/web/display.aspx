<%@ Page Title="" Language="C#" MasterPageFile="~/Site.Master" AutoEventWireup="true" CodeBehind="display.aspx.cs" Inherits="WIDGaTserver.display" %>
<asp:Content ID="Content1" ContentPlaceHolderID="HeadContent" runat="server">
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="MainContent" runat="server">
    <p>
        Display Widget&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
        URI:
        <asp:TextBox ID="URI" runat="server"></asp:TextBox>
    </p>
    <iframe src="http://localhost:14443/Widget/Output/k11bm-e3652512/index.html" height="480" width="360"></iframe>
</asp:Content>
