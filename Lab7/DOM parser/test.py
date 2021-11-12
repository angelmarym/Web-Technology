from xml.dom.minidom import parse
import xml.dom.minidom

#docTree=xml.dom.minidom.parse("D:\\WT\\Lab7\\DOM parser\\Infrastructure.xml")
docTree=xml.dom.minidom.parse("C:\\Users\\Angel\\Documents\\Sem3\\WT\\Lab7\\Lab7\\DOM parser\\Infrastructure.xml")

print(docTree.nodeName)
print(docTree.firstChild.tagName)

wing=docTree.getElementsByTagName("Wing")
print("%d Wings in the Hospital" % wing.length)
for x in wing:
    print(x.getAttribute("wingID"))


