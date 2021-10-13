<%


Function ConvertFormtoXML(strXMLFilePath, strFileName)

 Dim objDom
 Dim objRoot
 Dim objField
 Dim objFieldValue
 Dim objattID
 Dim objattTabOrder
 Dim objPI
 Dim x

 Set objDom = server.CreateObject("Microsoft.XMLDOM")
 objDom.preserveWhiteSpace = True


 Set objRoot = objDom.createElement("CHRIST")
 objDom.appendChild objRoot


 For x = 1 To Request.Form.Count

  If instr(1,Request.Form.Key(x),"btn") = 0 Then

   Set objField = objDom.createElement("field")

   Set objattID = objDom.createAttribute("id")

   objattID.Text = Request.Form.Key(x)

   objField.setAttributeNode objattID

   Set objattTabOrder = objDom.createAttribute("taborder")

   objattTabOrder.Text = x

   objField.setAttributeNode objattTabOrder

   Set objFieldValue = objDom.createElement("field_value")

   objFieldValue.Text = Request.Form(x)

   objRoot.appendChild objField

   objField.appendChild objFieldValue
  End If
 Next 


 Set objPI = objDom.createProcessingInstruction("xml", "version='1.0'")

 objDom.insertBefore objPI, objDom.childNodes(0)



 objDom.save strXMLFilePath & "\" & strFileName



 Set objDom = Nothing
 Set objRoot = Nothing
 Set objField = Nothing
 Set objFieldValue = Nothing
 Set objattID = Nothing
 Set objattTabOrder = Nothing
 Set objPI = Nothing
End Function



On Error Resume Next


ConvertFormtoXML "c:","Student.xml"


If err.number <> 0 then
 Response.write("Errors occurred while saving your form submission.")
Else
 Response.write("Your form submission has been saved.")
End If
%>