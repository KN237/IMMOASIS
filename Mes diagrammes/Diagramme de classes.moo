<?xml version="1.0" encoding="UTF-8"?>
<?PowerDesigner AppLocale="UTF16" ID="{E075A94C-EB4D-4F96-A5D4-B392020DBCA3}" Label="" LastModificationDate="1630755203" Name="Diagramme de classes " Objects="165" Symbols="40" Target="Analyse" TargetLink="Reference" Type="{18112060-1A4B-11D1-83D9-444553540000}" signature="CLD_OBJECT_MODEL" version="15.1.0.2850"?>
<!-- Veuillez ne pas modifier ce fichier -->

<Model xmlns:a="attribute" xmlns:c="collection" xmlns:o="object">

<o:RootObject Id="o1">
<c:Children>
<o:Model Id="o2">
<a:ObjectID>E075A94C-EB4D-4F96-A5D4-B392020DBCA3</a:ObjectID>
<a:Name>Diagramme de classes </a:Name>
<a:Code>Diagramme_de_classes_</a:Code>
<a:CreationDate>1628508135</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1629804956</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:PackageOptionsText>[FolderOptions]

[FolderOptions\Class Diagram Objects]
GenerationCheckModel=Yes
GenerationPath=
GenerationOptions=
GenerationTasks=
GenerationTargets=
GenerationSelections=</a:PackageOptionsText>
<a:ModelOptionsText>[ModelOptions]

[ModelOptions\Cld]
CaseSensitive=No
DisplayName=Yes
EnableTrans=No
EnableRequirements=No
ShowClss=No
DeftAttr=int
DeftMthd=
DeftParm=int
DeftCont=
DomnDttp=Yes
DomnChck=No
DomnRule=No
SupportDelay=No
PreviewEditable=Yes
AutoRealize=No
DttpFullName=Yes
DeftClssAttrVisi=private
VBNetPreprocessingSymbols=
CSharpPreprocessingSymbols=

[ModelOptions\Cld\NamingOptionsTemplates]

[ModelOptions\Cld\ClssNamingOptions]

[ModelOptions\Cld\ClssNamingOptions\CLDPCKG]

[ModelOptions\Cld\ClssNamingOptions\CLDPCKG\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\CLDPCKG\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; +-*/!=&lt;&gt;&#39;&quot;&quot;().&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\CLDDOMN]

[ModelOptions\Cld\ClssNamingOptions\CLDDOMN\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\CLDDOMN\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; +-*/!=&lt;&gt;&#39;&quot;&quot;().&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\CLDCLASS]

[ModelOptions\Cld\ClssNamingOptions\CLDCLASS\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\CLDCLASS\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; +-*/!=&lt;&gt;&#39;&quot;&quot;().&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\CLDINTF]

[ModelOptions\Cld\ClssNamingOptions\CLDINTF\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\CLDINTF\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; +-*/!=&lt;&gt;&#39;&quot;&quot;().&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\UCDACTR]

[ModelOptions\Cld\ClssNamingOptions\UCDACTR\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\UCDACTR\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; +-*/!=&lt;&gt;&#39;&quot;&quot;().&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\UCDUCAS]

[ModelOptions\Cld\ClssNamingOptions\UCDUCAS\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\UCDUCAS\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; +-*/!=&lt;&gt;&#39;&quot;&quot;().&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\SQDOBJT]

[ModelOptions\Cld\ClssNamingOptions\SQDOBJT\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\SQDOBJT\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; +-*/!=&lt;&gt;&#39;&quot;&quot;().&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\SQDMSSG]

[ModelOptions\Cld\ClssNamingOptions\SQDMSSG\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\SQDMSSG\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; +-*/!=&lt;&gt;&#39;&quot;&quot;().&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\CPDCOMP]

[ModelOptions\Cld\ClssNamingOptions\CPDCOMP\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\CPDCOMP\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; +-*/!=&lt;&gt;&#39;&quot;&quot;().&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\CLDATTR]

[ModelOptions\Cld\ClssNamingOptions\CLDATTR\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\CLDATTR\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; +-*/!=&lt;&gt;&#39;&quot;&quot;().&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\CLDMETHOD]

[ModelOptions\Cld\ClssNamingOptions\CLDMETHOD\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\CLDMETHOD\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; +-*/!=&lt;&gt;&#39;&quot;&quot;().&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\CLDPARM]

[ModelOptions\Cld\ClssNamingOptions\CLDPARM\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\CLDPARM\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; +-*/!=&lt;&gt;&#39;&quot;&quot;().&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\OOMPORT]

[ModelOptions\Cld\ClssNamingOptions\OOMPORT\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\OOMPORT\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; +-*/!=&lt;&gt;&#39;&quot;&quot;().&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\OOMPART]

[ModelOptions\Cld\ClssNamingOptions\OOMPART\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\OOMPART\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; +-*/!=&lt;&gt;&#39;&quot;&quot;().&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\CLDASSC]

[ModelOptions\Cld\ClssNamingOptions\CLDASSC\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\CLDASSC\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; +-*/!=&lt;&gt;&#39;&quot;&quot;().&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\UCDASSC]

[ModelOptions\Cld\ClssNamingOptions\UCDASSC\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\UCDASSC\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; +-*/!=&lt;&gt;&#39;&quot;&quot;().&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\GNRLLINK]

[ModelOptions\Cld\ClssNamingOptions\GNRLLINK\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\GNRLLINK\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; +-*/!=&lt;&gt;&#39;&quot;&quot;().&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\RQLINK]

[ModelOptions\Cld\ClssNamingOptions\RQLINK\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\RQLINK\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; +-*/!=&lt;&gt;&#39;&quot;&quot;().&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\RLZSLINK]

[ModelOptions\Cld\ClssNamingOptions\RLZSLINK\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\RLZSLINK\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; +-*/!=&lt;&gt;&#39;&quot;&quot;().&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\DEPDLINK]

[ModelOptions\Cld\ClssNamingOptions\DEPDLINK\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\DEPDLINK\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; +-*/!=&lt;&gt;&#39;&quot;&quot;().&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\OOMACTV]

[ModelOptions\Cld\ClssNamingOptions\OOMACTV\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\OOMACTV\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; +-*/!=&lt;&gt;&#39;&quot;&quot;().&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\ACDOBST]

[ModelOptions\Cld\ClssNamingOptions\ACDOBST\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\ACDOBST\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; +-*/!=&lt;&gt;&#39;&quot;&quot;().&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\STAT]

[ModelOptions\Cld\ClssNamingOptions\STAT\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\STAT\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; +-*/!=&lt;&gt;&#39;&quot;&quot;().&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\DPDNODE]

[ModelOptions\Cld\ClssNamingOptions\DPDNODE\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\DPDNODE\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; +-*/!=&lt;&gt;&#39;&quot;&quot;().&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\DPDCMPI]

[ModelOptions\Cld\ClssNamingOptions\DPDCMPI\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\DPDCMPI\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; +-*/!=&lt;&gt;&#39;&quot;&quot;().&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\DPDASSC]

[ModelOptions\Cld\ClssNamingOptions\DPDASSC\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\DPDASSC\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; +-*/!=&lt;&gt;&#39;&quot;&quot;().&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\OOMVAR]

[ModelOptions\Cld\ClssNamingOptions\OOMVAR\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\OOMVAR\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; +-*/!=&lt;&gt;&#39;&quot;&quot;().&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\FILO]

[ModelOptions\Cld\ClssNamingOptions\FILO\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=&quot;\/:*?&lt;&gt;|&quot;
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\FILO\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_. &quot;
InvldChar=&quot; +-*/!=&lt;&gt;&#39;&quot;&quot;().&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\FRMEOBJ]

[ModelOptions\Cld\ClssNamingOptions\FRMEOBJ\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\FRMEOBJ\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; +-*/!=&lt;&gt;&#39;&quot;&quot;().&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\FRMELNK]

[ModelOptions\Cld\ClssNamingOptions\FRMELNK\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\FRMELNK\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; +-*/!=&lt;&gt;&#39;&quot;&quot;().&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\DefaultClass]

[ModelOptions\Cld\ClssNamingOptions\DefaultClass\Name]
Template=
MaxLen=254
Case=M
ValidChar=
InvldChar=
AllValid=Yes
NoAccent=No
DefaultChar=_
Script=.convert_name(%Name%,&quot;_&quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Cld\ClssNamingOptions\DefaultClass\Code]
Template=
MaxLen=254
Case=M
ValidChar=&#39;a&#39;-&#39;z&#39;,&#39;A&#39;-&#39;Z&#39;,&#39;0&#39;-&#39;9&#39;,&quot;_&quot;
InvldChar=&quot; +-*/!=&lt;&gt;&#39;&quot;&quot;().&quot;
AllValid=Yes
NoAccent=Yes
DefaultChar=_
Script=.convert_code(%Code%,&quot; &quot;)
ConvTable=
ConvTablePath=%_HOME%\Fichiers de ressources\Tables de conversion

[ModelOptions\Generate]

[ModelOptions\Generate\Cdm]
CheckModel=Yes
SaveLinks=Yes
NameToCode=No
Notation=2

[ModelOptions\Generate\Pdm]
CheckModel=Yes
SaveLinks=Yes
ORMapping=No
NameToCode=No
BuildTrgr=No
TablePrefix=
RefrUpdRule=RESTRICT
RefrDelRule=RESTRICT
IndxPKName=%TABLE%_PK
IndxAKName=%TABLE%_AK
IndxFKName=%REFR%_FK
IndxThreshold=
ColnFKName=%.3:PARENT%_%COLUMN%
ColnFKNameUse=No

[ModelOptions\Generate\Xsm]
CheckModel=Yes
SaveLinks=Yes
ORMapping=No
NameToCode=No</a:ModelOptionsText>
<c:ObjectLanguage>
<o:Shortcut Id="o3">
<a:ObjectID>0B5B2E6D-C4BF-4D04-A208-DAB3102CE904</a:ObjectID>
<a:Name>Analyse</a:Name>
<a:Code>Analysis</a:Code>
<a:CreationDate>1628508135</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628508135</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:TargetStereotype/>
<a:TargetID>87317290-AF03-469F-BC1E-99593F18A4AB</a:TargetID>
<a:TargetClassID>1811206C-1A4B-11D1-83D9-444553540000</a:TargetClassID>
</o:Shortcut>
</c:ObjectLanguage>
<c:ClassDiagrams>
<o:ClassDiagram Id="o4">
<a:ObjectID>02EA4474-0A3D-4723-9CFD-2694B4C6D5F4</a:ObjectID>
<a:Name>DiagrammeClasses_1</a:Name>
<a:Code>DiagrammeClasses_1</a:Code>
<a:CreationDate>1628508135</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1629804956</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:DisplayPreferences>[DisplayPreferences]

[DisplayPreferences\CLD]

[DisplayPreferences\General]
Adjust to text=Yes
Snap Grid=No
Constrain Labels=Yes
Display Grid=No
Show Page Delimiter=Yes
Grid size=0
Graphic unit=2
Window color=255, 255, 255
Background image=
Background mode=8
Watermark image=
Watermark mode=8
Show watermark on screen=No
Gradient mode=0
Gradient end color=255, 255, 255
Show Swimlane=No
SwimlaneVert=Yes
TreeVert=No
CompDark=0

[DisplayPreferences\Object]
Mode=2
Trunc Length=40
Word Length=40
Word Text=!&quot;&quot;#$%&amp;&#39;()*+,-./:;&lt;=&gt;?@[\]^_`{|}~
Shortcut IntIcon=Yes
Shortcut IntLoct=Yes
Shortcut IntFullPath=No
Shortcut IntLastPackage=Yes
Shortcut ExtIcon=Yes
Shortcut ExtLoct=No
Shortcut ExtFullPath=No
Shortcut ExtLastPackage=Yes
Shortcut ExtIncludeModl=Yes
EObjShowStrn=Yes
ExtendedObject.Comment=No
ExtendedObject.IconPicture=No
ExtendedObject_SymbolLayout=&lt;Form&gt;[CRLF] &lt;StandardAttribute Name=&quot;Stéréotype&quot; Attribute=&quot;Stereotype&quot; Prefix=&quot;&amp;lt;&amp;lt;&quot; Suffix=&quot;&amp;gt;&amp;gt;&quot; Alignment=&quot;CNTR&quot; Caption=&quot;&quot; Mandatory=&quot;No&quot; /&gt;[CRLF] &lt;StandardAttribute Name=&quot;Nom de l&amp;#39;objet&quot; Attribute=&quot;DisplayName&quot; Prefix=&quot;&quot; Suffix=&quot;&quot; Alignment=&quot;CNTR&quot; Caption=&quot;&quot; Mandatory=&quot;Yes&quot; /&gt;[CRLF] &lt;Separator Name=&quot;Séparateur&quot; /&gt;[CRLF] &lt;StandardAttribute Name=&quot;Commentaire&quot; Attribute=&quot;Comment&quot; Prefix=&quot;&quot; Suffix=&quot;&quot; Alignment=&quot;LEFT&quot; Caption=&quot;&quot; Mandatory=&quot;No&quot; /&gt;[CRLF] &lt;StandardAttribute Name=&quot;Icône&quot; Attribute=&quot;IconPicture&quot; Prefix=&quot;&quot; Suffix=&quot;&quot; Alignment=&quot;CNTR&quot; Caption=&quot;&quot; Mandatory=&quot;Yes&quot; /&gt;[CRLF]&lt;/Form&gt;
ELnkShowStrn=Yes
ELnkShowName=Yes
ExtendedLink_SymbolLayout=&lt;Form&gt;[CRLF] &lt;Form Name=&quot;Centre&quot; &gt;[CRLF]  &lt;StandardAttribute Name=&quot;Stéréotype&quot; Attribute=&quot;Stereotype&quot; Prefix=&quot;&amp;lt;&amp;lt;&quot; Suffix=&quot;&amp;gt;&amp;gt;&quot; Caption=&quot;&quot; Mandatory=&quot;No&quot; /&gt;[CRLF]  &lt;StandardAttribute Name=&quot;Nom&quot; Attribute=&quot;DisplayName&quot; Prefix=&quot;&quot; Suffix=&quot;&quot; Caption=&quot;&quot; Mandatory=&quot;No&quot; /&gt;[CRLF] &lt;/Form&gt;[CRLF] &lt;Form Name=&quot;Source&quot; &gt;[CRLF] &lt;/Form&gt;[CRLF] &lt;Form Name=&quot;Destination&quot; &gt;[CRLF] &lt;/Form&gt;[CRLF]&lt;/Form&gt;
FileObject.Stereotype=No
FileObject.DisplayName=Yes
FileObject.LocationOrName=No
FileObject.IconPicture=No
FileObject.IconMode=Yes
FileObject_SymbolLayout=&lt;Form&gt;[CRLF] &lt;StandardAttribute Name=&quot;Stéréotype&quot; Attribute=&quot;Stereotype&quot; Prefix=&quot;&amp;lt;&amp;lt;&quot; Suffix=&quot;&amp;gt;&amp;gt;&quot; Alignment=&quot;CNTR&quot; Caption=&quot;&quot; Mandatory=&quot;No&quot; /&gt;[CRLF] &lt;ExclusiveChoice Name=&quot;Choix exclusif&quot; Mandatory=&quot;Yes&quot; Display=&quot;HorizontalRadios&quot; &gt;[CRLF]  &lt;StandardAttribute Name=&quot;Nom&quot; Attribute=&quot;DisplayName&quot; Prefix=&quot;&quot; Suffix=&quot;&quot; Alignment=&quot;CNTR&quot; Caption=&quot;&quot; Mandatory=&quot;No&quot; /&gt;[CRLF]  &lt;StandardAttribute Name=&quot;Emplacement&quot; Attribute=&quot;LocationOrName&quot; Prefix=&quot;&quot; Suffix=&quot;&quot; Alignment=&quot;CNTR&quot; Caption=&quot;&quot; Mandatory=&quot;No&quot; /&gt;[CRLF] &lt;/ExclusiveChoice&gt;[CRLF] &lt;StandardAttribute Name=&quot;Icône&quot; Attribute=&quot;IconPicture&quot; Prefix=&quot;&quot; Suffix=&quot;&quot; Alignment=&quot;CNTR&quot; Caption=&quot;&quot; Mandatory=&quot;Yes&quot; /&gt;[CRLF]&lt;/Form&gt;
PckgShowStrn=Yes
Package.Comment=No
Package.IconPicture=No
Package_SymbolLayout=
Display Model Version=Yes
Class.IconPicture=No
Class_SymbolLayout=
Interface.IconPicture=No
Interface_SymbolLayout=
Port.IconPicture=No
Port_SymbolLayout=
ClssShowSttr=Yes
Class.Comment=No
ClssShowCntr=Yes
ClssShowAttr=Yes
ClssAttrTrun=No
ClssAttrMax=3
ClssShowMthd=Yes
ClssMthdTrun=No
ClssMthdMax=3
ClssShowInnr=Yes
IntfShowSttr=Yes
Interface.Comment=No
IntfShowAttr=Yes
IntfAttrTrun=No
IntfAttrMax=3
IntfShowMthd=Yes
IntfMthdTrun=No
IntfMthdMax=3
IntfShowCntr=Yes
IntfShowInnr=Yes
PortShowName=Yes
PortShowType=No
PortShowMult=No
AttrShowVisi=Yes
AttrVisiFmt=1
AttrShowStrn=Yes
AttrShowDttp=Yes
AttrShowDomn=No
AttrShowInit=Yes
MthdShowVisi=Yes
MthdVisiFmt=1
MthdShowStrn=Yes
MthdShowRttp=Yes
MthdShowParm=Yes
AsscShowName=No
AsscShowCntr=Yes
AsscShowRole=Yes
AsscShowOrdr=Yes
AsscShowMult=Yes
AsscMultStr=Yes
AsscShowStrn=No
GnrlShowName=No
GnrlShowStrn=Yes
GnrlShowCntr=Yes
RlzsShowName=No
RlzsShowStrn=Yes
RlzsShowCntr=Yes
DepdShowName=No
DepdShowStrn=Yes
DepdShowCntr=Yes
RqlkShowName=No
RqlkShowStrn=Yes
RqlkShowCntr=Yes

[DisplayPreferences\Symbol]

[DisplayPreferences\Symbol\FRMEOBJ]
STRNFont=Arial,8,N
STRNFont color=0, 0, 0
DISPNAMEFont=Arial,8,N
DISPNAMEFont color=0, 0, 0
LABLFont=Arial,8,N
LABLFont color=0, 0, 0
AutoAdjustToText=Yes
Keep aspect=No
Keep center=No
Keep size=No
Width=6000
Height=2000
Brush color=255 255 255
Fill Color=Yes
Brush style=6
Brush bitmap mode=12
Brush gradient mode=64
Brush gradient color=192 192 192
Brush background image=
Custom shape=
Custom text mode=0
Pen=1 0 255 128 128
Shadow color=192 192 192
Shadow=0

[DisplayPreferences\Symbol\FRMELNK]
CENTERFont=Arial,8,N
CENTERFont color=0, 0, 0
Line style=1
AutoAdjustToText=Yes
Keep aspect=No
Keep center=No
Keep size=No
Brush color=255 255 255
Fill Color=Yes
Brush style=1
Brush bitmap mode=12
Brush gradient mode=0
Brush gradient color=118 118 118
Brush background image=
Custom shape=
Custom text mode=0
Pen=1 0 128 128 255
Shadow color=192 192 192
Shadow=0

[DisplayPreferences\Symbol\FILO]
OBJSTRNFont=Arial,8,N
OBJSTRNFont color=0, 0, 0
DISPNAMEFont=Arial,8,N
DISPNAMEFont color=0, 0, 0
LCNMFont=Arial,8,N
LCNMFont color=0, 0, 0
AutoAdjustToText=Yes
Keep aspect=No
Keep center=No
Keep size=No
Width=4800
Height=3600
Brush color=255 255 255
Fill Color=Yes
Brush style=1
Brush bitmap mode=12
Brush gradient mode=0
Brush gradient color=118 118 118
Brush background image=
Custom shape=
Custom text mode=0
Pen=1 0 0 0 255
Shadow color=192 192 192
Shadow=0

[DisplayPreferences\Symbol\CLDPCKG]
STRNFont=Arial,8,N
STRNFont color=0, 0, 0
DISPNAMEFont=Arial,8,N
DISPNAMEFont color=0, 0, 0
LABLFont=Arial,8,N
LABLFont color=0, 0, 0
AutoAdjustToText=Yes
Keep aspect=No
Keep center=No
Keep size=No
Width=4800
Height=3600
Brush color=255 255 192
Fill Color=Yes
Brush style=6
Brush bitmap mode=12
Brush gradient mode=65
Brush gradient color=255 255 255
Brush background image=
Custom shape=
Custom text mode=0
Pen=1 0 178 178 178
Shadow color=192 192 192
Shadow=0

[DisplayPreferences\Symbol\CLDCLASS]
STRNFont=Arial,8,N
STRNFont color=0, 0, 0
DISPNAMEFont=Arial,8,N
DISPNAMEFont color=0, 0, 0
CNTRFont=Arial,8,N
CNTRFont color=0, 0, 0
AttributesFont=Arial,8,N
AttributesFont color=0, 0, 0
ClassPrimaryAttributeFont=Arial,8,U
ClassPrimaryAttributeFont color=0, 0, 0
OperationsFont=Arial,8,N
OperationsFont color=0, 0, 0
InnerClassifiersFont=Arial,8,N
InnerClassifiersFont color=0, 0, 0
LABLFont=Arial,8,N
LABLFont color=0, 0, 0
AutoAdjustToText=Yes
Keep aspect=No
Keep center=No
Keep size=No
Width=4800
Height=3600
Brush color=174 228 255
Fill Color=Yes
Brush style=6
Brush bitmap mode=12
Brush gradient mode=65
Brush gradient color=255 255 255
Brush background image=
Custom shape=
Custom text mode=0
Pen=1 0 0 128 255
Shadow color=192 192 192
Shadow=0

[DisplayPreferences\Symbol\CLDINTF]
STRNFont=Arial,8,N
STRNFont color=0, 0, 0
DISPNAMEFont=Arial,8,N
DISPNAMEFont color=0, 0, 0
CNTRFont=Arial,8,N
CNTRFont color=0, 0, 0
AttributesFont=Arial,8,N
AttributesFont color=0, 0, 0
OperationsFont=Arial,8,N
OperationsFont color=0, 0, 0
InnerClassifiersFont=Arial,8,N
InnerClassifiersFont color=0, 0, 0
LABLFont=Arial,8,N
LABLFont color=0, 0, 0
AutoAdjustToText=Yes
Keep aspect=No
Keep center=No
Keep size=No
Width=4800
Height=3600
Brush color=208 208 255
Fill Color=Yes
Brush style=6
Brush bitmap mode=12
Brush gradient mode=65
Brush gradient color=255 255 255
Brush background image=
Custom shape=
Custom text mode=0
Pen=1 0 128 128 255
Shadow color=192 192 192
Shadow=0

[DisplayPreferences\Symbol\OOMPORT]
DISPNAMEFont=Arial,8,N
DISPNAMEFont color=0, 0, 0
AutoAdjustToText=Yes
Keep aspect=No
Keep center=No
Keep size=No
Width=800
Height=800
Brush color=174 228 255
Fill Color=Yes
Brush style=6
Brush bitmap mode=12
Brush gradient mode=65
Brush gradient color=255 255 255
Brush background image=
Custom shape=
Custom text mode=0
Pen=1 0 0 128 255
Shadow color=192 192 192
Shadow=0

[DisplayPreferences\Symbol\CLDASSC]
DISPNAMEFont=Arial,8,N
DISPNAMEFont color=0, 0, 0
MULAFont=Arial,8,N
MULAFont color=0, 0, 0
Line style=1
Pen=1 0 0 128 255
Shadow color=192 192 192
Shadow=0

[DisplayPreferences\Symbol\INNERLINK]
Line style=1
Pen=1 0 0 128 255
Shadow color=192 192 192
Shadow=0

[DisplayPreferences\Symbol\CLDACLK]
Line style=1
Pen=2 0 0 128 255
Shadow color=192 192 192
Shadow=0

[DisplayPreferences\Symbol\GNRLLINK]
DISPNAMEFont=Arial,8,N
DISPNAMEFont color=0, 0, 0
Line style=1
Pen=1 0 128 128 255
Shadow color=192 192 192
Shadow=0

[DisplayPreferences\Symbol\RLZSLINK]
DISPNAMEFont=Arial,8,N
DISPNAMEFont color=0, 0, 0
Line style=1
Pen=3 0 128 128 255
Shadow color=192 192 192
Shadow=0

[DisplayPreferences\Symbol\RQLINK]
DISPNAMEFont=Arial,8,N
DISPNAMEFont color=0, 0, 0
Line style=1
Pen=1 0 128 128 255
Shadow color=192 192 192
Shadow=0

[DisplayPreferences\Symbol\DEPDLINK]
DISPNAMEFont=Arial,8,N
DISPNAMEFont color=0, 0, 0
Line style=1
Pen=2 0 128 128 255
Shadow color=192 192 192
Shadow=0

[DisplayPreferences\Symbol\USRDEPD]
OBJXSTRFont=Arial,8,N
OBJXSTRFont color=0, 0, 0
Line style=1
AutoAdjustToText=Yes
Keep aspect=No
Keep center=No
Keep size=No
Brush color=255 255 255
Fill Color=Yes
Brush style=1
Brush bitmap mode=12
Brush gradient mode=0
Brush gradient color=118 118 118
Brush background image=
Custom shape=
Custom text mode=0
Pen=2 0 128 128 255
Shadow color=192 192 192
Shadow=0

[DisplayPreferences\Symbol\Free Symbol]
Free TextFont=Arial,8,N
Free TextFont color=0, 0, 0
Line style=0
AutoAdjustToText=Yes
Keep aspect=No
Keep center=No
Keep size=No
Brush color=255 255 255
Fill Color=Yes
Brush style=1
Brush bitmap mode=12
Brush gradient mode=0
Brush gradient color=118 118 118
Brush background image=
Custom shape=
Custom text mode=0
Pen=1 0 0 0 255
Shadow color=192 192 192
Shadow=0</a:DisplayPreferences>
<a:PaperSize>(8500, 11000)</a:PaperSize>
<a:PageMargins>((315,354), (433,354))</a:PageMargins>
<a:PageOrientation>-5636</a:PageOrientation>
<a:PaperSource>-5636</a:PaperSource>
<c:Symbols>
<o:GeneralizationSymbol Id="o5">
<a:CreationDate>1628508606</a:CreationDate>
<a:ModificationDate>1630751834</a:ModificationDate>
<a:Rect>((-14881,23220), (-426,30019))</a:Rect>
<a:ListOfPoints>((-14881,30019),(-4341,30019),(-4341,23220),(-426,23220))</a:ListOfPoints>
<a:CornerStyle>1</a:CornerStyle>
<a:ArrowStyle>7</a:ArrowStyle>
<a:LineColor>0</a:LineColor>
<a:LineWidth>1</a:LineWidth>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>DISPNAME 0 Arial,8,N</a:FontList>
<c:SourceSymbol>
<o:ClassSymbol Ref="o6"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:ClassSymbol Ref="o7"/>
</c:DestinationSymbol>
<c:Object>
<o:Generalization Ref="o8"/>
</c:Object>
</o:GeneralizationSymbol>
<o:GeneralizationSymbol Id="o9">
<a:CreationDate>1628508608</a:CreationDate>
<a:ModificationDate>1630748513</a:ModificationDate>
<a:Rect>((5436,13775), (18261,22539))</a:Rect>
<a:ListOfPoints>((18261,13775),(18261,22539),(5436,22539))</a:ListOfPoints>
<a:CornerStyle>1</a:CornerStyle>
<a:ArrowStyle>7</a:ArrowStyle>
<a:LineColor>0</a:LineColor>
<a:LineWidth>1</a:LineWidth>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>DISPNAME 0 Arial,8,N</a:FontList>
<c:SourceSymbol>
<o:ClassSymbol Ref="o10"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:ClassSymbol Ref="o7"/>
</c:DestinationSymbol>
<c:Object>
<o:Generalization Ref="o11"/>
</c:Object>
</o:GeneralizationSymbol>
<o:GeneralizationSymbol Id="o12">
<a:CreationDate>1628508609</a:CreationDate>
<a:ModificationDate>1630753041</a:ModificationDate>
<a:Rect>((2414,14525), (3414,25269))</a:Rect>
<a:ListOfPoints>((3328,14525),(3328,18707),(2500,18707),(2500,25269))</a:ListOfPoints>
<a:CornerStyle>1</a:CornerStyle>
<a:ArrowStyle>7</a:ArrowStyle>
<a:LineColor>0</a:LineColor>
<a:LineWidth>1</a:LineWidth>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>DISPNAME 0 Arial,8,N</a:FontList>
<c:SourceSymbol>
<o:ClassSymbol Ref="o13"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:ClassSymbol Ref="o7"/>
</c:DestinationSymbol>
<c:Object>
<o:Generalization Ref="o14"/>
</c:Object>
</o:GeneralizationSymbol>
<o:AssociationSymbol Id="o15">
<a:CreationDate>1628508741</a:CreationDate>
<a:ModificationDate>1630753041</a:ModificationDate>
<a:Rect>((-6731,4821), (9310,14425))</a:Rect>
<a:ListOfPoints>((7286,14425),(7286,10548),(-4857,10548),(-4857,4821))</a:ListOfPoints>
<a:CornerStyle>1</a:CornerStyle>
<a:ArrowStyle>8</a:ArrowStyle>
<a:LineColor>0</a:LineColor>
<a:LineWidth>1</a:LineWidth>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>DISPNAME 0 Arial,8,N
MULA 0 Arial,8,N</a:FontList>
<c:SourceSymbol>
<o:ClassSymbol Ref="o13"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:ClassSymbol Ref="o16"/>
</c:DestinationSymbol>
<c:Object>
<o:Association Ref="o17"/>
</c:Object>
</o:AssociationSymbol>
<o:AssociationSymbol Id="o18">
<a:CreationDate>1628508748</a:CreationDate>
<a:ModificationDate>1628586621</a:ModificationDate>
<a:Rect>((6562,18397), (30960,26443))</a:Rect>
<a:ListOfPoints>((30960,18397),(30960,25269),(6562,25269))</a:ListOfPoints>
<a:CornerStyle>1</a:CornerStyle>
<a:ArrowStyle>8</a:ArrowStyle>
<a:LineColor>0</a:LineColor>
<a:LineWidth>1</a:LineWidth>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>DISPNAME 0 Arial,8,N
MULA 0 Arial,8,N</a:FontList>
<c:SourceSymbol>
<o:ClassSymbol Ref="o19"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:ClassSymbol Ref="o7"/>
</c:DestinationSymbol>
<c:Object>
<o:Association Ref="o20"/>
</c:Object>
</o:AssociationSymbol>
<o:AssociationSymbol Id="o21">
<a:CreationDate>1628508814</a:CreationDate>
<a:ModificationDate>1630752000</a:ModificationDate>
<a:Rect>((5630,-45569), (19173,7389))</a:Rect>
<a:ListOfPoints>((17149,7389),(17149,-17406),(7504,-17406),(7504,-45569))</a:ListOfPoints>
<a:CornerStyle>1</a:CornerStyle>
<a:ArrowStyle>8</a:ArrowStyle>
<a:LineColor>0</a:LineColor>
<a:LineWidth>1</a:LineWidth>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>DISPNAME 0 Arial,8,N
MULA 0 Arial,8,N</a:FontList>
<c:SourceSymbol>
<o:ClassSymbol Ref="o10"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:ClassSymbol Ref="o22"/>
</c:DestinationSymbol>
<c:Object>
<o:Association Ref="o23"/>
</c:Object>
</o:AssociationSymbol>
<o:AssociationSymbol Id="o24">
<a:CreationDate>1628508818</a:CreationDate>
<a:ModificationDate>1630752000</a:ModificationDate>
<a:Rect>((-32987,-45606), (1179,-34504))</a:Rect>
<a:ListOfPoints>((-32987,-35679),(-17530,-35679),(-17530,-44433),(1179,-44433))</a:ListOfPoints>
<a:CornerStyle>1</a:CornerStyle>
<a:ArrowStyle>8</a:ArrowStyle>
<a:LineColor>0</a:LineColor>
<a:LineWidth>1</a:LineWidth>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>DISPNAME 0 Arial,8,N
MULA 0 Arial,8,N</a:FontList>
<c:SourceSymbol>
<o:ClassSymbol Ref="o25"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:ClassSymbol Ref="o22"/>
</c:DestinationSymbol>
<c:Object>
<o:Association Ref="o26"/>
</c:Object>
</o:AssociationSymbol>
<o:AssociationSymbol Id="o27">
<a:CreationDate>1628508820</a:CreationDate>
<a:ModificationDate>1630752000</a:ModificationDate>
<a:Rect>((-8432,-53865), (-1358,-43451))</a:Rect>
<a:ListOfPoints>((-8432,-52466),(-3232,-52466),(-3232,-43451))</a:ListOfPoints>
<a:CornerStyle>1</a:CornerStyle>
<a:ArrowStyle>8</a:ArrowStyle>
<a:LineColor>0</a:LineColor>
<a:LineWidth>1</a:LineWidth>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>DISPNAME 0 Arial,8,N
MULA 0 Arial,8,N</a:FontList>
<c:SourceSymbol>
<o:ClassSymbol Ref="o28"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:ClassSymbol Ref="o22"/>
</c:DestinationSymbol>
<c:Object>
<o:Association Ref="o29"/>
</c:Object>
</o:AssociationSymbol>
<o:AssociationSymbol Id="o30">
<a:CreationDate>1628508822</a:CreationDate>
<a:ModificationDate>1630752000</a:ModificationDate>
<a:Rect>((-782,-38447), (2179,-22184))</a:Rect>
<a:ListOfPoints>((-782,-22184),(-782,-29763),(2179,-29763),(2179,-38447))</a:ListOfPoints>
<a:CornerStyle>1</a:CornerStyle>
<a:ArrowStyle>8</a:ArrowStyle>
<a:LineColor>0</a:LineColor>
<a:LineWidth>1</a:LineWidth>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>DISPNAME 0 Arial,8,N
MULA 0 Arial,8,N</a:FontList>
<c:SourceSymbol>
<o:ClassSymbol Ref="o31"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:ClassSymbol Ref="o22"/>
</c:DestinationSymbol>
<c:Object>
<o:Association Ref="o32"/>
</c:Object>
</o:AssociationSymbol>
<o:AssociationSymbol Id="o33">
<a:CreationDate>1628508953</a:CreationDate>
<a:ModificationDate>1630751834</a:ModificationDate>
<a:Rect>((-34547,28975), (-18433,32045))</a:Rect>
<a:ListOfPoints>((-18433,32045),(-24234,32045),(-24234,28975),(-34547,28975))</a:ListOfPoints>
<a:CornerStyle>1</a:CornerStyle>
<a:ArrowStyle>8</a:ArrowStyle>
<a:LineColor>0</a:LineColor>
<a:LineWidth>1</a:LineWidth>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>DISPNAME 0 Arial,8,N
MULA 0 Arial,8,N</a:FontList>
<c:SourceSymbol>
<o:ClassSymbol Ref="o6"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:ClassSymbol Ref="o34"/>
</c:DestinationSymbol>
<c:Object>
<o:Association Ref="o35"/>
</c:Object>
</o:AssociationSymbol>
<o:AssociationSymbol Id="o36">
<a:CreationDate>1628508992</a:CreationDate>
<a:ModificationDate>1630751834</a:ModificationDate>
<a:Rect>((-27216,-676), (-13794,28589))</a:Rect>
<a:ListOfPoints>((-15818,28589),(-15818,-676),(-27216,-676))</a:ListOfPoints>
<a:CornerStyle>1</a:CornerStyle>
<a:ArrowStyle>8</a:ArrowStyle>
<a:LineColor>0</a:LineColor>
<a:LineWidth>1</a:LineWidth>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>DISPNAME 0 Arial,8,N
MULA 0 Arial,8,N</a:FontList>
<c:SourceSymbol>
<o:ClassSymbol Ref="o6"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:ClassSymbol Ref="o37"/>
</c:DestinationSymbol>
<c:Object>
<o:Association Ref="o38"/>
</c:Object>
</o:AssociationSymbol>
<o:AssociationSymbol Id="o39">
<a:CreationDate>1628509239</a:CreationDate>
<a:ModificationDate>1630751850</a:ModificationDate>
<a:Rect>((-31260,1454), (-28460,19438))</a:Rect>
<a:ListOfPoints>((-28460,1454),(-28460,11729),(-31260,11729),(-31260,19438))</a:ListOfPoints>
<a:CornerStyle>1</a:CornerStyle>
<a:ArrowStyle>8</a:ArrowStyle>
<a:LineColor>0</a:LineColor>
<a:LineWidth>1</a:LineWidth>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>DISPNAME 0 Arial,8,N
MULA 0 Arial,8,N</a:FontList>
<c:SourceSymbol>
<o:ClassSymbol Ref="o37"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:ClassSymbol Ref="o40"/>
</c:DestinationSymbol>
<c:Object>
<o:Association Ref="o41"/>
</c:Object>
</o:AssociationSymbol>
<o:AssociationSymbol Id="o42">
<a:CreationDate>1628509241</a:CreationDate>
<a:ModificationDate>1630751858</a:ModificationDate>
<a:Rect>((-26308,3808), (-17776,15808))</a:Rect>
<a:ListOfPoints>((-24434,3808),(-24434,10854),(-19800,10854),(-19800,15808))</a:ListOfPoints>
<a:CornerStyle>1</a:CornerStyle>
<a:ArrowStyle>8</a:ArrowStyle>
<a:LineColor>0</a:LineColor>
<a:LineWidth>1</a:LineWidth>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>DISPNAME 0 Arial,8,N
MULA 0 Arial,8,N</a:FontList>
<c:SourceSymbol>
<o:ClassSymbol Ref="o37"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:ClassSymbol Ref="o43"/>
</c:DestinationSymbol>
<c:Object>
<o:Association Ref="o44"/>
</c:Object>
</o:AssociationSymbol>
<o:AssociationSymbol Id="o45">
<a:CreationDate>1628509391</a:CreationDate>
<a:ModificationDate>1628586621</a:ModificationDate>
<a:Rect>((-40910,1425), (-31296,9767))</a:Rect>
<a:ListOfPoints>((-31296,2599),(-35465,2599),(-35465,8593),(-40910,8593))</a:ListOfPoints>
<a:CornerStyle>1</a:CornerStyle>
<a:ArrowStyle>8</a:ArrowStyle>
<a:LineColor>0</a:LineColor>
<a:LineWidth>1</a:LineWidth>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>DISPNAME 0 Arial,8,N
MULA 0 Arial,8,N</a:FontList>
<c:SourceSymbol>
<o:ClassSymbol Ref="o37"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:ClassSymbol Ref="o46"/>
</c:DestinationSymbol>
<c:Object>
<o:Association Ref="o47"/>
</c:Object>
</o:AssociationSymbol>
<o:AssociationSymbol Id="o48">
<a:CreationDate>1628509392</a:CreationDate>
<a:ModificationDate>1628586621</a:ModificationDate>
<a:Rect>((-50462,3846), (-43506,8578))</a:Rect>
<a:ListOfPoints>((-45493,8578),(-45493,3846),(-50462,3846))</a:ListOfPoints>
<a:CornerStyle>1</a:CornerStyle>
<a:ArrowStyle>8</a:ArrowStyle>
<a:LineColor>0</a:LineColor>
<a:LineWidth>1</a:LineWidth>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>DISPNAME 0 Arial,8,N
MULA 0 Arial,8,N</a:FontList>
<c:SourceSymbol>
<o:ClassSymbol Ref="o46"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:ClassSymbol Ref="o49"/>
</c:DestinationSymbol>
<c:Object>
<o:Association Ref="o50"/>
</c:Object>
</o:AssociationSymbol>
<o:AssociationSymbol Id="o51">
<a:CreationDate>1628509481</a:CreationDate>
<a:ModificationDate>1628586621</a:ModificationDate>
<a:Rect>((-44332,-10177), (-29998,-940))</a:Rect>
<a:ListOfPoints>((-42495,-10177),(-42495,-941),(-29998,-941))</a:ListOfPoints>
<a:CornerStyle>1</a:CornerStyle>
<a:ArrowStyle>8</a:ArrowStyle>
<a:LineColor>0</a:LineColor>
<a:LineWidth>1</a:LineWidth>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>DISPNAME 0 Arial,8,N
MULA 0 Arial,8,N</a:FontList>
<c:SourceSymbol>
<o:ClassSymbol Ref="o52"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:ClassSymbol Ref="o37"/>
</c:DestinationSymbol>
<c:Object>
<o:Association Ref="o53"/>
</c:Object>
</o:AssociationSymbol>
<o:AssociationSymbol Id="o54">
<a:CreationDate>1628509484</a:CreationDate>
<a:ModificationDate>1628586621</a:ModificationDate>
<a:Rect>((-33063,-17261), (-25600,1189))</a:Rect>
<a:ListOfPoints>((-31226,-17261),(-31226,-7725),(-27587,-7725),(-27587,1189))</a:ListOfPoints>
<a:CornerStyle>1</a:CornerStyle>
<a:ArrowStyle>8</a:ArrowStyle>
<a:LineColor>0</a:LineColor>
<a:LineWidth>1</a:LineWidth>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>DISPNAME 0 Arial,8,N
MULA 0 Arial,8,N</a:FontList>
<c:SourceSymbol>
<o:ClassSymbol Ref="o55"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:ClassSymbol Ref="o37"/>
</c:DestinationSymbol>
<c:Object>
<o:Association Ref="o56"/>
</c:Object>
</o:AssociationSymbol>
<o:AssociationSymbol Id="o57">
<a:CreationDate>1628509485</a:CreationDate>
<a:ModificationDate>1630751943</a:ModificationDate>
<a:Rect>((-26474,-10305), (-7365,1029))</a:Rect>
<a:ListOfPoints>((-7365,-10305),(-7365,-146),(-26474,-146))</a:ListOfPoints>
<a:CornerStyle>1</a:CornerStyle>
<a:ArrowStyle>8</a:ArrowStyle>
<a:LineColor>0</a:LineColor>
<a:LineWidth>1</a:LineWidth>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>DISPNAME 0 Arial,8,N
MULA 0 Arial,8,N</a:FontList>
<c:SourceSymbol>
<o:ClassSymbol Ref="o58"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:ClassSymbol Ref="o37"/>
</c:DestinationSymbol>
<c:Object>
<o:Association Ref="o59"/>
</c:Object>
</o:AssociationSymbol>
<o:AssociationSymbol Id="o60">
<a:CreationDate>1628509629</a:CreationDate>
<a:ModificationDate>1630755203</a:ModificationDate>
<a:Rect>((-26249,-47039), (1376,2831))</a:Rect>
<a:ListOfPoints>((1376,-45866),(-18980,-45866),(-18980,1657),(-26249,1657))</a:ListOfPoints>
<a:CornerStyle>1</a:CornerStyle>
<a:ArrowStyle>8</a:ArrowStyle>
<a:LineColor>0</a:LineColor>
<a:LineWidth>1</a:LineWidth>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>DISPNAME 0 Arial,8,N
MULA 0 Arial,8,N</a:FontList>
<c:SourceSymbol>
<o:ClassSymbol Ref="o22"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:ClassSymbol Ref="o37"/>
</c:DestinationSymbol>
<c:Object>
<o:Association Ref="o61"/>
</c:Object>
</o:AssociationSymbol>
<o:AssociationSymbol Id="o62">
<a:CreationDate>1629804956</a:CreationDate>
<a:ModificationDate>1630751901</a:ModificationDate>
<a:Rect>((1677,-6076), (5675,3699))</a:Rect>
<a:ListOfPoints>((3651,3699),(3651,-3299),(3551,-3299),(3551,-6076))</a:ListOfPoints>
<a:CornerStyle>1</a:CornerStyle>
<a:ArrowStyle>8</a:ArrowStyle>
<a:LineColor>64</a:LineColor>
<a:LineWidth>1</a:LineWidth>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>DISPNAME 0 Arial,8,N
MULA 0 Arial,8,N</a:FontList>
<c:SourceSymbol>
<o:ClassSymbol Ref="o16"/>
</c:SourceSymbol>
<c:DestinationSymbol>
<o:ClassSymbol Ref="o63"/>
</c:DestinationSymbol>
<c:Object>
<o:Association Ref="o64"/>
</c:Object>
</o:AssociationSymbol>
<o:ClassSymbol Id="o7">
<a:CreationDate>1628508159</a:CreationDate>
<a:ModificationDate>1628586621</a:ModificationDate>
<a:IconMode>-1</a:IconMode>
<a:Rect>((-2049,21604), (8351,30294))</a:Rect>
<a:LineColor>0</a:LineColor>
<a:LineWidth>1</a:LineWidth>
<a:FillColor>4605695</a:FillColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>STRN 0 Arial,8,N
DISPNAME 0 Arial,8,N
CNTR 0 Arial,8,N
Attributes 0 Arial,8,N
ClassPrimaryAttribute 0 Arial,8,U
Operations 0 Arial,8,N
InnerClassifiers 0 Arial,8,N
LABL 0 Arial,8,N</a:FontList>
<a:BrushStyle>6</a:BrushStyle>
<a:GradientFillMode>65</a:GradientFillMode>
<a:GradientEndColor>16777215</a:GradientEndColor>
<c:Object>
<o:Class Ref="o65"/>
</c:Object>
</o:ClassSymbol>
<o:ClassSymbol Id="o6">
<a:CreationDate>1628508197</a:CreationDate>
<a:ModificationDate>1630751834</a:ModificationDate>
<a:IconMode>-1</a:IconMode>
<a:Rect>((-19505,24469), (-6633,38029))</a:Rect>
<a:LineColor>0</a:LineColor>
<a:LineWidth>1</a:LineWidth>
<a:FillColor>4605695</a:FillColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>STRN 0 Arial,8,N
DISPNAME 0 Arial,8,N
CNTR 0 Arial,8,N
Attributes 0 Arial,8,N
ClassPrimaryAttribute 0 Arial,8,U
Operations 0 Arial,8,N
InnerClassifiers 0 Arial,8,N
LABL 0 Arial,8,N</a:FontList>
<a:BrushStyle>6</a:BrushStyle>
<a:GradientFillMode>65</a:GradientFillMode>
<a:GradientEndColor>16777215</a:GradientEndColor>
<c:Object>
<o:Class Ref="o66"/>
</c:Object>
</o:ClassSymbol>
<o:ClassSymbol Id="o10">
<a:CreationDate>1628508199</a:CreationDate>
<a:ModificationDate>1630748513</a:ModificationDate>
<a:IconMode>-1</a:IconMode>
<a:Rect>((13563,2070), (25739,17578))</a:Rect>
<a:LineColor>0</a:LineColor>
<a:LineWidth>1</a:LineWidth>
<a:FillColor>4605695</a:FillColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>STRN 0 Arial,8,N
DISPNAME 0 Arial,8,N
CNTR 0 Arial,8,N
Attributes 0 Arial,8,N
ClassPrimaryAttribute 0 Arial,8,U
Operations 0 Arial,8,N
InnerClassifiers 0 Arial,8,N
LABL 0 Arial,8,N</a:FontList>
<a:BrushStyle>6</a:BrushStyle>
<a:GradientFillMode>65</a:GradientFillMode>
<a:GradientEndColor>16777215</a:GradientEndColor>
<c:Object>
<o:Class Ref="o67"/>
</c:Object>
</o:ClassSymbol>
<o:ClassSymbol Id="o13">
<a:CreationDate>1628508200</a:CreationDate>
<a:ModificationDate>1630753041</a:ModificationDate>
<a:IconMode>-1</a:IconMode>
<a:Rect>((1192,12389), (7962,16210))</a:Rect>
<a:LineColor>0</a:LineColor>
<a:LineWidth>1</a:LineWidth>
<a:FillColor>4605695</a:FillColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>STRN 0 Arial,8,N
DISPNAME 0 Arial,8,N
CNTR 0 Arial,8,N
Attributes 0 Arial,8,N
ClassPrimaryAttribute 0 Arial,8,U
Operations 0 Arial,8,N
InnerClassifiers 0 Arial,8,N
LABL 0 Arial,8,N</a:FontList>
<a:BrushStyle>6</a:BrushStyle>
<a:GradientFillMode>65</a:GradientFillMode>
<a:GradientEndColor>16777215</a:GradientEndColor>
<c:Object>
<o:Class Ref="o68"/>
</c:Object>
</o:ClassSymbol>
<o:ClassSymbol Id="o16">
<a:CreationDate>1628508257</a:CreationDate>
<a:ModificationDate>1630751898</a:ModificationDate>
<a:IconMode>-1</a:IconMode>
<a:Rect>((-6900,1978), (5200,8720))</a:Rect>
<a:LineColor>0</a:LineColor>
<a:LineWidth>1</a:LineWidth>
<a:FillColor>4605695</a:FillColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>STRN 0 Arial,8,N
DISPNAME 0 Arial,8,N
CNTR 0 Arial,8,N
Attributes 0 Arial,8,N
ClassPrimaryAttribute 0 Arial,8,U
Operations 0 Arial,8,N
InnerClassifiers 0 Arial,8,N
LABL 0 Arial,8,N</a:FontList>
<a:BrushStyle>6</a:BrushStyle>
<a:GradientFillMode>65</a:GradientFillMode>
<a:GradientEndColor>16777215</a:GradientEndColor>
<c:Object>
<o:Class Ref="o69"/>
</c:Object>
</o:ClassSymbol>
<o:ClassSymbol Id="o19">
<a:CreationDate>1628508259</a:CreationDate>
<a:ModificationDate>1628586621</a:ModificationDate>
<a:IconMode>-1</a:IconMode>
<a:Rect>((26148,13703), (37552,20445))</a:Rect>
<a:LineColor>0</a:LineColor>
<a:LineWidth>1</a:LineWidth>
<a:FillColor>4605695</a:FillColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>STRN 0 Arial,8,N
DISPNAME 0 Arial,8,N
CNTR 0 Arial,8,N
Attributes 0 Arial,8,N
ClassPrimaryAttribute 0 Arial,8,U
Operations 0 Arial,8,N
InnerClassifiers 0 Arial,8,N
LABL 0 Arial,8,N</a:FontList>
<a:BrushStyle>6</a:BrushStyle>
<a:GradientFillMode>65</a:GradientFillMode>
<a:GradientEndColor>16777215</a:GradientEndColor>
<c:Object>
<o:Class Ref="o70"/>
</c:Object>
</o:ClassSymbol>
<o:ClassSymbol Id="o22">
<a:CreationDate>1628508308</a:CreationDate>
<a:ModificationDate>1630752000</a:ModificationDate>
<a:IconMode>-1</a:IconMode>
<a:Rect>((-4621,-51417), (8173,-36883))</a:Rect>
<a:LineColor>0</a:LineColor>
<a:LineWidth>1</a:LineWidth>
<a:FillColor>4605695</a:FillColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>STRN 0 Arial,8,N
DISPNAME 0 Arial,8,N
CNTR 0 Arial,8,N
Attributes 0 Arial,8,N
ClassPrimaryAttribute 0 Arial,8,U
Operations 0 Arial,8,N
InnerClassifiers 0 Arial,8,N
LABL 0 Arial,8,N</a:FontList>
<a:BrushStyle>6</a:BrushStyle>
<a:GradientFillMode>65</a:GradientFillMode>
<a:GradientEndColor>16777215</a:GradientEndColor>
<c:Object>
<o:Class Ref="o71"/>
</c:Object>
</o:ClassSymbol>
<o:ClassSymbol Id="o25">
<a:CreationDate>1628508312</a:CreationDate>
<a:ModificationDate>1630751966</a:ModificationDate>
<a:IconMode>-1</a:IconMode>
<a:Rect>((-39107,-37884), (-27239,-32116))</a:Rect>
<a:LineColor>0</a:LineColor>
<a:LineWidth>1</a:LineWidth>
<a:FillColor>4605695</a:FillColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>STRN 0 Arial,8,N
DISPNAME 0 Arial,8,N
CNTR 0 Arial,8,N
Attributes 0 Arial,8,N
ClassPrimaryAttribute 0 Arial,8,U
Operations 0 Arial,8,N
InnerClassifiers 0 Arial,8,N
LABL 0 Arial,8,N</a:FontList>
<a:BrushStyle>6</a:BrushStyle>
<a:GradientFillMode>65</a:GradientFillMode>
<a:GradientEndColor>16777215</a:GradientEndColor>
<c:Object>
<o:Class Ref="o72"/>
</c:Object>
</o:ClassSymbol>
<o:ClassSymbol Id="o28">
<a:CreationDate>1628508314</a:CreationDate>
<a:ModificationDate>1630751959</a:ModificationDate>
<a:IconMode>-1</a:IconMode>
<a:Rect>((-19588,-55899), (-8106,-51105))</a:Rect>
<a:LineColor>0</a:LineColor>
<a:LineWidth>1</a:LineWidth>
<a:FillColor>4605695</a:FillColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>STRN 0 Arial,8,N
DISPNAME 0 Arial,8,N
CNTR 0 Arial,8,N
Attributes 0 Arial,8,N
ClassPrimaryAttribute 0 Arial,8,U
Operations 0 Arial,8,N
InnerClassifiers 0 Arial,8,N
LABL 0 Arial,8,N</a:FontList>
<a:BrushStyle>6</a:BrushStyle>
<a:GradientFillMode>65</a:GradientFillMode>
<a:GradientEndColor>16777215</a:GradientEndColor>
<c:Object>
<o:Class Ref="o73"/>
</c:Object>
</o:ClassSymbol>
<o:ClassSymbol Id="o31">
<a:CreationDate>1628508318</a:CreationDate>
<a:ModificationDate>1630751947</a:ModificationDate>
<a:IconMode>-1</a:IconMode>
<a:Rect>((-4191,-22646), (7291,-15904))</a:Rect>
<a:LineColor>0</a:LineColor>
<a:LineWidth>1</a:LineWidth>
<a:FillColor>4605695</a:FillColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>STRN 0 Arial,8,N
DISPNAME 0 Arial,8,N
CNTR 0 Arial,8,N
Attributes 0 Arial,8,N
ClassPrimaryAttribute 0 Arial,8,U
Operations 0 Arial,8,N
InnerClassifiers 0 Arial,8,N
LABL 0 Arial,8,N</a:FontList>
<a:BrushStyle>6</a:BrushStyle>
<a:GradientFillMode>65</a:GradientFillMode>
<a:GradientEndColor>16777215</a:GradientEndColor>
<c:Object>
<o:Class Ref="o74"/>
</c:Object>
</o:ClassSymbol>
<o:ClassSymbol Id="o34">
<a:CreationDate>1628508378</a:CreationDate>
<a:ModificationDate>1630751829</a:ModificationDate>
<a:IconMode>-1</a:IconMode>
<a:Rect>((-40135,25865), (-28963,31633))</a:Rect>
<a:LineColor>0</a:LineColor>
<a:LineWidth>1</a:LineWidth>
<a:FillColor>4605695</a:FillColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>STRN 0 Arial,8,N
DISPNAME 0 Arial,8,N
CNTR 0 Arial,8,N
Attributes 0 Arial,8,N
ClassPrimaryAttribute 0 Arial,8,U
Operations 0 Arial,8,N
InnerClassifiers 0 Arial,8,N
LABL 0 Arial,8,N</a:FontList>
<a:BrushStyle>6</a:BrushStyle>
<a:GradientFillMode>65</a:GradientFillMode>
<a:GradientEndColor>16777215</a:GradientEndColor>
<c:Object>
<o:Class Ref="o75"/>
</c:Object>
</o:ClassSymbol>
<o:ClassSymbol Id="o37">
<a:CreationDate>1628508399</a:CreationDate>
<a:ModificationDate>1628586621</a:ModificationDate>
<a:IconMode>-1</a:IconMode>
<a:Rect>((-32407,-4531), (-20539,9029))</a:Rect>
<a:LineColor>0</a:LineColor>
<a:LineWidth>1</a:LineWidth>
<a:FillColor>4605695</a:FillColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>STRN 0 Arial,8,N
DISPNAME 0 Arial,8,N
CNTR 0 Arial,8,N
Attributes 0 Arial,8,N
ClassPrimaryAttribute 0 Arial,8,U
Operations 0 Arial,8,N
InnerClassifiers 0 Arial,8,N
LABL 0 Arial,8,N</a:FontList>
<a:BrushStyle>6</a:BrushStyle>
<a:GradientFillMode>65</a:GradientFillMode>
<a:GradientEndColor>16777215</a:GradientEndColor>
<c:Object>
<o:Class Ref="o76"/>
</c:Object>
</o:ClassSymbol>
<o:ClassSymbol Id="o46">
<a:CreationDate>1628508436</a:CreationDate>
<a:ModificationDate>1628586621</a:ModificationDate>
<a:IconMode>-1</a:IconMode>
<a:Rect>((-46435,8204), (-37811,12998))</a:Rect>
<a:LineColor>0</a:LineColor>
<a:LineWidth>1</a:LineWidth>
<a:FillColor>4605695</a:FillColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>STRN 0 Arial,8,N
DISPNAME 0 Arial,8,N
CNTR 0 Arial,8,N
Attributes 0 Arial,8,N
ClassPrimaryAttribute 0 Arial,8,U
Operations 0 Arial,8,N
InnerClassifiers 0 Arial,8,N
LABL 0 Arial,8,N</a:FontList>
<a:BrushStyle>6</a:BrushStyle>
<a:GradientFillMode>65</a:GradientFillMode>
<a:GradientEndColor>16777215</a:GradientEndColor>
<c:Object>
<o:Class Ref="o77"/>
</c:Object>
</o:ClassSymbol>
<o:ClassSymbol Id="o49">
<a:CreationDate>1628508437</a:CreationDate>
<a:ModificationDate>1628586621</a:ModificationDate>
<a:IconMode>-1</a:IconMode>
<a:Rect>((-59277,-2509), (-47873,5207))</a:Rect>
<a:LineColor>0</a:LineColor>
<a:LineWidth>1</a:LineWidth>
<a:FillColor>4605695</a:FillColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>STRN 0 Arial,8,N
DISPNAME 0 Arial,8,N
CNTR 0 Arial,8,N
Attributes 0 Arial,8,N
ClassPrimaryAttribute 0 Arial,8,U
Operations 0 Arial,8,N
InnerClassifiers 0 Arial,8,N
LABL 0 Arial,8,N</a:FontList>
<a:BrushStyle>6</a:BrushStyle>
<a:GradientFillMode>65</a:GradientFillMode>
<a:GradientEndColor>16777215</a:GradientEndColor>
<c:Object>
<o:Class Ref="o78"/>
</c:Object>
</o:ClassSymbol>
<o:ClassSymbol Id="o40">
<a:CreationDate>1628508471</a:CreationDate>
<a:ModificationDate>1630751850</a:ModificationDate>
<a:IconMode>-1</a:IconMode>
<a:Rect>((-39748,17229), (-31048,22023))</a:Rect>
<a:LineColor>0</a:LineColor>
<a:LineWidth>1</a:LineWidth>
<a:FillColor>4605695</a:FillColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>STRN 0 Arial,8,N
DISPNAME 0 Arial,8,N
CNTR 0 Arial,8,N
Attributes 0 Arial,8,N
ClassPrimaryAttribute 0 Arial,8,U
Operations 0 Arial,8,N
InnerClassifiers 0 Arial,8,N
LABL 0 Arial,8,N</a:FontList>
<a:BrushStyle>6</a:BrushStyle>
<a:GradientFillMode>65</a:GradientFillMode>
<a:GradientEndColor>16777215</a:GradientEndColor>
<c:Object>
<o:Class Ref="o79"/>
</c:Object>
</o:ClassSymbol>
<o:ClassSymbol Id="o43">
<a:CreationDate>1628508474</a:CreationDate>
<a:ModificationDate>1630751858</a:ModificationDate>
<a:IconMode>-1</a:IconMode>
<a:Rect>((-27957,15479), (-17943,20273))</a:Rect>
<a:LineColor>0</a:LineColor>
<a:LineWidth>1</a:LineWidth>
<a:FillColor>4605695</a:FillColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>STRN 0 Arial,8,N
DISPNAME 0 Arial,8,N
CNTR 0 Arial,8,N
Attributes 0 Arial,8,N
ClassPrimaryAttribute 0 Arial,8,U
Operations 0 Arial,8,N
InnerClassifiers 0 Arial,8,N
LABL 0 Arial,8,N</a:FontList>
<a:BrushStyle>6</a:BrushStyle>
<a:GradientFillMode>65</a:GradientFillMode>
<a:GradientEndColor>16777215</a:GradientEndColor>
<c:Object>
<o:Class Ref="o80"/>
</c:Object>
</o:ClassSymbol>
<o:ClassSymbol Id="o52">
<a:CreationDate>1628508520</a:CreationDate>
<a:ModificationDate>1628586621</a:ModificationDate>
<a:IconMode>-1</a:IconMode>
<a:Rect>((-46591,-14534), (-34105,-8766))</a:Rect>
<a:LineColor>0</a:LineColor>
<a:LineWidth>1</a:LineWidth>
<a:FillColor>4605695</a:FillColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>STRN 0 Arial,8,N
DISPNAME 0 Arial,8,N
CNTR 0 Arial,8,N
Attributes 0 Arial,8,N
ClassPrimaryAttribute 0 Arial,8,U
Operations 0 Arial,8,N
InnerClassifiers 0 Arial,8,N
LABL 0 Arial,8,N</a:FontList>
<a:BrushStyle>6</a:BrushStyle>
<a:GradientFillMode>65</a:GradientFillMode>
<a:GradientEndColor>16777215</a:GradientEndColor>
<c:Object>
<o:Class Ref="o81"/>
</c:Object>
</o:ClassSymbol>
<o:ClassSymbol Id="o55">
<a:CreationDate>1628508520</a:CreationDate>
<a:ModificationDate>1628586621</a:ModificationDate>
<a:IconMode>-1</a:IconMode>
<a:Rect>((-34048,-22184), (-22102,-16416))</a:Rect>
<a:LineColor>0</a:LineColor>
<a:LineWidth>1</a:LineWidth>
<a:FillColor>4605695</a:FillColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>STRN 0 Arial,8,N
DISPNAME 0 Arial,8,N
CNTR 0 Arial,8,N
Attributes 0 Arial,8,N
ClassPrimaryAttribute 0 Arial,8,U
Operations 0 Arial,8,N
InnerClassifiers 0 Arial,8,N
LABL 0 Arial,8,N</a:FontList>
<a:BrushStyle>6</a:BrushStyle>
<a:GradientFillMode>65</a:GradientFillMode>
<a:GradientEndColor>16777215</a:GradientEndColor>
<c:Object>
<o:Class Ref="o82"/>
</c:Object>
</o:ClassSymbol>
<o:ClassSymbol Id="o58">
<a:CreationDate>1628508521</a:CreationDate>
<a:ModificationDate>1630751943</a:ModificationDate>
<a:IconMode>-1</a:IconMode>
<a:Rect>((-17004,-14382), (-3592,-4718))</a:Rect>
<a:LineColor>0</a:LineColor>
<a:LineWidth>1</a:LineWidth>
<a:FillColor>4605695</a:FillColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>STRN 0 Arial,8,N
DISPNAME 0 Arial,8,N
CNTR 0 Arial,8,N
Attributes 0 Arial,8,N
ClassPrimaryAttribute 0 Arial,8,U
Operations 0 Arial,8,N
InnerClassifiers 0 Arial,8,N
LABL 0 Arial,8,N</a:FontList>
<a:BrushStyle>6</a:BrushStyle>
<a:GradientFillMode>65</a:GradientFillMode>
<a:GradientEndColor>16777215</a:GradientEndColor>
<c:Object>
<o:Class Ref="o83"/>
</c:Object>
</o:ClassSymbol>
<o:ClassSymbol Id="o63">
<a:CreationDate>1629804900</a:CreationDate>
<a:ModificationDate>1630751901</a:ModificationDate>
<a:IconMode>-1</a:IconMode>
<a:Rect>((-88,-9373), (5988,-4579))</a:Rect>
<a:LineColor>0</a:LineColor>
<a:LineWidth>1</a:LineWidth>
<a:FillColor>4605695</a:FillColor>
<a:ShadowColor>12632256</a:ShadowColor>
<a:FontList>STRN 0 Arial,8,N
DISPNAME 0 Arial,8,N
CNTR 0 Arial,8,N
Attributes 0 Arial,8,N
ClassPrimaryAttribute 0 Arial,8,U
Operations 0 Arial,8,N
InnerClassifiers 0 Arial,8,N
LABL 0 Arial,8,N</a:FontList>
<a:BrushStyle>6</a:BrushStyle>
<a:GradientFillMode>65</a:GradientFillMode>
<a:GradientEndColor>16777215</a:GradientEndColor>
<c:Object>
<o:Class Ref="o84"/>
</c:Object>
</o:ClassSymbol>
</c:Symbols>
</o:ClassDiagram>
</c:ClassDiagrams>
<c:DefaultDiagram>
<o:ClassDiagram Ref="o4"/>
</c:DefaultDiagram>
<c:Classes>
<o:Class Id="o65">
<a:ObjectID>F3D11890-A03D-4FA9-87A1-27F92F02782E</a:ObjectID>
<a:Name>Utilisateur</a:Name>
<a:Code>Utilisateur</a:Code>
<a:CreationDate>1628508159</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628510725</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:UseParentNamespace>0</a:UseParentNamespace>
<c:Attributes>
<o:Attribute Id="o85">
<a:ObjectID>39D96B7D-712B-404C-A674-6667D13E3945</a:ObjectID>
<a:Name>idU</a:Name>
<a:Code>idU</a:Code>
<a:CreationDate>1628510640</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628510766</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:DataType>int</a:DataType>
<a:Attribute.Visibility>#</a:Attribute.Visibility>
</o:Attribute>
<o:Attribute Id="o86">
<a:ObjectID>2EB07AA4-62D6-4FFB-92D5-1E2264DE5D95</a:ObjectID>
<a:Name>nomU</a:Name>
<a:Code>nomU</a:Code>
<a:CreationDate>1628510640</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628511000</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:DataType>String</a:DataType>
<a:Attribute.Visibility>#</a:Attribute.Visibility>
</o:Attribute>
<o:Attribute Id="o87">
<a:ObjectID>65C89A89-2500-400E-8F0C-5B2C89AEEC0C</a:ObjectID>
<a:Name>nomCompletU</a:Name>
<a:Code>nomCompletU</a:Code>
<a:CreationDate>1628510640</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628511000</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:DataType>String</a:DataType>
<a:Attribute.Visibility>#</a:Attribute.Visibility>
</o:Attribute>
<o:Attribute Id="o88">
<a:ObjectID>BF238F84-1693-41F0-9EED-1063A5BCDE6E</a:ObjectID>
<a:Name>emailU</a:Name>
<a:Code>emailU</a:Code>
<a:CreationDate>1628510640</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628511000</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:DataType>String</a:DataType>
<a:Attribute.Visibility>#</a:Attribute.Visibility>
</o:Attribute>
<o:Attribute Id="o89">
<a:ObjectID>E582F75C-6E61-4E48-8349-BC0DCE7445B7</a:ObjectID>
<a:Name>mdpU</a:Name>
<a:Code>mdpU</a:Code>
<a:CreationDate>1628510640</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628511000</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:DataType>String</a:DataType>
<a:Attribute.Visibility>#</a:Attribute.Visibility>
</o:Attribute>
<o:Attribute Id="o90">
<a:ObjectID>5B01DEAB-F40E-4FD8-8B9D-4D6C18593392</a:ObjectID>
<a:Name>telephoneU</a:Name>
<a:Code>telephoneU</a:Code>
<a:CreationDate>1628510640</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628510766</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:DataType>int</a:DataType>
<a:Attribute.Visibility>#</a:Attribute.Visibility>
</o:Attribute>
</c:Attributes>
<c:Identifiers>
<o:Identifier Id="o91">
<a:ObjectID>51E383D1-E9A5-4FDD-9660-0CCE450DEE84</a:ObjectID>
<a:Name>Identifiant_1</a:Name>
<a:Code>Identifiant_1</a:Code>
<a:CreationDate>1628510712</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628510725</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<c:Identifier.Attributes>
<o:Attribute Ref="o85"/>
</c:Identifier.Attributes>
</o:Identifier>
</c:Identifiers>
<c:PrimaryIdentifier>
<o:Identifier Ref="o91"/>
</c:PrimaryIdentifier>
</o:Class>
<o:Class Id="o66">
<a:ObjectID>141DD68F-D64D-4304-8018-A29510CE79AF</a:ObjectID>
<a:Name>Bailleur</a:Name>
<a:Code>Bailleur</a:Code>
<a:CreationDate>1628508197</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628511681</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:UseParentNamespace>0</a:UseParentNamespace>
<c:Attributes>
<o:Attribute Id="o92">
<a:ObjectID>47F5F273-D0DE-4EA7-A73B-919A957C50DE</a:ObjectID>
<a:Name>idBailleur</a:Name>
<a:Code>idBailleur</a:Code>
<a:CreationDate>1628511477</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628511681</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:DataType>int</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
</o:Attribute>
<o:Attribute Id="o93">
<a:ObjectID>DE362838-9666-4036-858D-2022F9ACB495</a:ObjectID>
<a:Name>numCniBailleur</a:Name>
<a:Code>numCniBailleur</a:Code>
<a:CreationDate>1628511477</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628511677</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:DataType>int</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
</o:Attribute>
<o:Attribute Id="o94">
<a:ObjectID>7AD1CE52-D853-4DC8-9431-0ABC4C9A63E9</a:ObjectID>
<a:Name>telephoneSecBailleur</a:Name>
<a:Code>telephoneSecBailleur</a:Code>
<a:CreationDate>1628511477</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628511677</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:DataType>int</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
</o:Attribute>
<o:Attribute Id="o95">
<a:ObjectID>3EFE3948-B855-4201-9168-EC9B6F4B5232</a:ObjectID>
<a:Name>villeBailleur</a:Name>
<a:Code>villeBailleur</a:Code>
<a:CreationDate>1628511477</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628511677</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:DataType>String</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
</o:Attribute>
<o:Attribute Id="o96">
<a:ObjectID>2A7FCA04-3122-4891-9122-6DBEFFF91348</a:ObjectID>
<a:Name>quartierBailleur</a:Name>
<a:Code>quartierBailleur</a:Code>
<a:CreationDate>1628511477</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628511677</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:DataType>String</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
</o:Attribute>
<o:Attribute Id="o97">
<a:ObjectID>A2CC22C4-5590-4FD1-A8D6-D90B0A83455D</a:ObjectID>
<a:Name>paysBailleur</a:Name>
<a:Code>paysBailleur</a:Code>
<a:CreationDate>1628511477</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628511677</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:DataType>String</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
</o:Attribute>
<o:Attribute Id="o98">
<a:ObjectID>E6837FD7-ED1B-4979-AED7-8FC1AA44A56D</a:ObjectID>
<a:Name>dateNaissBailleur</a:Name>
<a:Code>dateNaissBailleur</a:Code>
<a:CreationDate>1628511477</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628511677</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:DataType>Date</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
</o:Attribute>
<o:Attribute Id="o99">
<a:ObjectID>FF728A3A-3B1E-4E19-B3C8-75E6E6F2F525</a:ObjectID>
<a:Name>lieuNaissBailleur</a:Name>
<a:Code>lieuNaissBailleur</a:Code>
<a:CreationDate>1628511477</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628511677</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:DataType>String</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
</o:Attribute>
<o:Attribute Id="o100">
<a:ObjectID>B8205773-D700-41C7-A820-349403267009</a:ObjectID>
<a:Name>nomCompletRep</a:Name>
<a:Code>nomCompletRep</a:Code>
<a:CreationDate>1628511477</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628511677</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:DataType>String</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
</o:Attribute>
<o:Attribute Id="o101">
<a:ObjectID>C8A88244-18ED-4A77-9DBC-DB694E60D4FF</a:ObjectID>
<a:Name>numCniRep</a:Name>
<a:Code>numCniRep</a:Code>
<a:CreationDate>1628511477</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628511677</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:DataType>int</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
</o:Attribute>
<o:Attribute Id="o102">
<a:ObjectID>3AFD1584-112B-4C11-9C27-BA4CDB6A6C89</a:ObjectID>
<a:Name>SignatureBailleur</a:Name>
<a:Code>SignatureBailleur</a:Code>
<a:CreationDate>1628511477</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628511677</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:DataType>String</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
</o:Attribute>
</c:Attributes>
<c:Identifiers>
<o:Identifier Id="o103">
<a:ObjectID>46C0D890-BC2E-4EFC-BC2B-3DE1A33420AB</a:ObjectID>
<a:Name>Identifiant_1</a:Name>
<a:Code>Identifiant_1</a:Code>
<a:CreationDate>1628511677</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628511681</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<c:Identifier.Attributes>
<o:Attribute Ref="o92"/>
</c:Identifier.Attributes>
</o:Identifier>
</c:Identifiers>
<c:PrimaryIdentifier>
<o:Identifier Ref="o103"/>
</c:PrimaryIdentifier>
</o:Class>
<o:Class Id="o67">
<a:ObjectID>5168918A-B0D5-43E0-ADDF-4F6D139A9560</a:ObjectID>
<a:Name>Locataire</a:Name>
<a:Code>Locataire</a:Code>
<a:CreationDate>1628508199</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628511373</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:UseParentNamespace>0</a:UseParentNamespace>
<c:Attributes>
<o:Attribute Id="o104">
<a:ObjectID>F4F90FCA-E370-4E7B-805B-1FA37DB4CC3C</a:ObjectID>
<a:Name>idLocataire</a:Name>
<a:Code>idLocataire</a:Code>
<a:CreationDate>1628511055</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628511373</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:DataType>int</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
</o:Attribute>
<o:Attribute Id="o105">
<a:ObjectID>247DE229-2BBD-42EF-A4AB-332F1D440BDE</a:ObjectID>
<a:Name>numCniLoc</a:Name>
<a:Code>numCniLoc</a:Code>
<a:CreationDate>1628511055</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628511368</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:DataType>int</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
</o:Attribute>
<o:Attribute Id="o106">
<a:ObjectID>5BFF683D-5217-45DE-89EE-632E22E05F8F</a:ObjectID>
<a:Name>telephoneSecLoc</a:Name>
<a:Code>telephoneSecLoc</a:Code>
<a:CreationDate>1628511055</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628511368</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:DataType>int</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
</o:Attribute>
<o:Attribute Id="o107">
<a:ObjectID>A11B960C-A4C0-441A-A7D1-ABDE859526DD</a:ObjectID>
<a:Name>villeLoc</a:Name>
<a:Code>villeLoc</a:Code>
<a:CreationDate>1628511055</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628511368</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:DataType>String</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
</o:Attribute>
<o:Attribute Id="o108">
<a:ObjectID>9BCAC487-868B-481D-82DB-AB56B159BBBD</a:ObjectID>
<a:Name>quartierLoc</a:Name>
<a:Code>quartierLoc</a:Code>
<a:CreationDate>1628511055</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628511368</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:DataType>String</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
</o:Attribute>
<o:Attribute Id="o109">
<a:ObjectID>FF0A5E57-DB8E-4FBA-8E73-A3DC25C3F99A</a:ObjectID>
<a:Name>paysLoc</a:Name>
<a:Code>paysLoc</a:Code>
<a:CreationDate>1628511055</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628511368</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:DataType>String</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
</o:Attribute>
<o:Attribute Id="o110">
<a:ObjectID>00A865B3-76EF-4EFC-BF6F-448BDE32E134</a:ObjectID>
<a:Name>dateNaissLoc</a:Name>
<a:Code>dateNaissLoc</a:Code>
<a:CreationDate>1628511055</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628511368</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:DataType>Date</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
</o:Attribute>
<o:Attribute Id="o111">
<a:ObjectID>DE308DC2-B7B8-46F7-B441-28D73B6B36D1</a:ObjectID>
<a:Name>sexeLoc</a:Name>
<a:Code>sexeLoc</a:Code>
<a:CreationDate>1628511055</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628511368</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:DataType>String</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
</o:Attribute>
<o:Attribute Id="o112">
<a:ObjectID>8DDAB927-8B5F-4757-BC72-A4E8E870D4EC</a:ObjectID>
<a:Name>lieuNaissLoc</a:Name>
<a:Code>lieuNaissLoc</a:Code>
<a:CreationDate>1628511055</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628511368</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:DataType>String</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
</o:Attribute>
<o:Attribute Id="o113">
<a:ObjectID>D56A5D91-1765-455F-B371-53928D51B73B</a:ObjectID>
<a:Name>professionLoc</a:Name>
<a:Code>professionLoc</a:Code>
<a:CreationDate>1628511055</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628511368</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:DataType>String</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
</o:Attribute>
<o:Attribute Id="o114">
<a:ObjectID>CDF62A07-46AD-4015-B25A-77AC1BD9E58D</a:ObjectID>
<a:Name>nomEmployeurLoc</a:Name>
<a:Code>nomEmployeurLoc</a:Code>
<a:CreationDate>1628511055</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628511368</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:DataType>String</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
</o:Attribute>
<o:Attribute Id="o115">
<a:ObjectID>54A6801D-FB86-4DE4-B2A1-F91EBB795CD4</a:ObjectID>
<a:Name>telEmployeurLoc</a:Name>
<a:Code>telEmployeurLoc</a:Code>
<a:CreationDate>1628511055</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628511368</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:DataType>int</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
</o:Attribute>
<o:Attribute Id="o116">
<a:ObjectID>371A2EFB-C023-4F4A-B1FE-36B05D953E7C</a:ObjectID>
<a:Name>revenuMensuelLoc</a:Name>
<a:Code>revenuMensuelLoc</a:Code>
<a:CreationDate>1628511055</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628511368</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:DataType>double</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
</o:Attribute>
</c:Attributes>
<c:Identifiers>
<o:Identifier Id="o117">
<a:ObjectID>F48AEF96-A42A-49D8-92FE-8BEC11653A6A</a:ObjectID>
<a:Name>Identifiant_1</a:Name>
<a:Code>Identifiant_1</a:Code>
<a:CreationDate>1628511368</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628511373</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<c:Identifier.Attributes>
<o:Attribute Ref="o104"/>
</c:Identifier.Attributes>
</o:Identifier>
</c:Identifiers>
<c:PrimaryIdentifier>
<o:Identifier Ref="o117"/>
</c:PrimaryIdentifier>
</o:Class>
<o:Class Id="o68">
<a:ObjectID>1EA07CAD-9376-4C31-9264-FCAEEB55CC4D</a:ObjectID>
<a:Name>Administrateur</a:Name>
<a:Code>Administrateur</a:Code>
<a:CreationDate>1628508200</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628511448</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:UseParentNamespace>0</a:UseParentNamespace>
<c:Attributes>
<o:Attribute Id="o118">
<a:ObjectID>D0CF0FB9-5CDD-469F-8874-03C4BE2C0877</a:ObjectID>
<a:Name>idAdmin</a:Name>
<a:Code>idAdmin</a:Code>
<a:CreationDate>1628510934</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628511448</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:DataType>int</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
</o:Attribute>
</c:Attributes>
<c:Identifiers>
<o:Identifier Id="o119">
<a:ObjectID>3695C1DA-2637-4501-A255-F5890B1496C3</a:ObjectID>
<a:Name>Identifiant_1</a:Name>
<a:Code>Identifiant_1</a:Code>
<a:CreationDate>1628510946</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628510952</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<c:Identifier.Attributes>
<o:Attribute Ref="o118"/>
</c:Identifier.Attributes>
</o:Identifier>
<o:Identifier Id="o120">
<a:ObjectID>8A81F58A-233F-47C0-A045-4B5496817EF7</a:ObjectID>
<a:Name>Identifiant_2</a:Name>
<a:Code>Identifiant_2</a:Code>
<a:CreationDate>1628511443</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628511448</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<c:Identifier.Attributes>
<o:Attribute Ref="o118"/>
</c:Identifier.Attributes>
</o:Identifier>
</c:Identifiers>
<c:PrimaryIdentifier>
<o:Identifier Ref="o120"/>
</c:PrimaryIdentifier>
</o:Class>
<o:Class Id="o69">
<a:ObjectID>6953A73F-200E-4556-9B42-238E16A7A440</a:ObjectID>
<a:Name>Artisan</a:Name>
<a:Code>Artisan</a:Code>
<a:CreationDate>1628508257</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1629804895</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:UseParentNamespace>0</a:UseParentNamespace>
<c:Attributes>
<o:Attribute Id="o121">
<a:ObjectID>622D470F-6E07-4CAB-AAC9-3AB1DB0DC497</a:ObjectID>
<a:Name>idArtisan</a:Name>
<a:Code>idArtisan</a:Code>
<a:CreationDate>1628511802</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628511894</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:DataType>int</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
</o:Attribute>
<o:Attribute Id="o122">
<a:ObjectID>EA1E2C2A-3720-4733-9128-8CB5954A5384</a:ObjectID>
<a:Name>nomCompletArtisan</a:Name>
<a:Code>nomCompletArtisan</a:Code>
<a:CreationDate>1628511802</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628511906</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:DataType>String</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
</o:Attribute>
<o:Attribute Id="o123">
<a:ObjectID>6F7B7538-0D69-42F0-B55E-F784F76AD90C</a:ObjectID>
<a:Name>telephoneArtisan</a:Name>
<a:Code>telephoneArtisan</a:Code>
<a:CreationDate>1628511802</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628511891</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:DataType>int</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
</o:Attribute>
<o:Attribute Id="o124">
<a:ObjectID>70261E4C-D7F7-418A-9A71-B1B8AC90B6EC</a:ObjectID>
<a:Name>professionArtisan</a:Name>
<a:Code>professionArtisan</a:Code>
<a:CreationDate>1628511802</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628511906</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:DataType>String</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
</o:Attribute>
</c:Attributes>
<c:Identifiers>
<o:Identifier Id="o125">
<a:ObjectID>A2EE0167-DEA3-4F59-86C0-EF8AC978D6E0</a:ObjectID>
<a:Name>Identifiant_1</a:Name>
<a:Code>Identifiant_1</a:Code>
<a:CreationDate>1628511891</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628511894</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<c:Identifier.Attributes>
<o:Attribute Ref="o121"/>
</c:Identifier.Attributes>
</o:Identifier>
</c:Identifiers>
<c:PrimaryIdentifier>
<o:Identifier Ref="o125"/>
</c:PrimaryIdentifier>
</o:Class>
<o:Class Id="o70">
<a:ObjectID>AE3E2D45-D46D-436D-A314-0FC8E132678D</a:ObjectID>
<a:Name>Package</a:Name>
<a:Code>Package</a:Code>
<a:CreationDate>1628508259</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628510865</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:UseParentNamespace>0</a:UseParentNamespace>
<c:Attributes>
<o:Attribute Id="o126">
<a:ObjectID>C528BB20-0252-4ABB-BAED-11913378FDF5</a:ObjectID>
<a:Name>idPackage</a:Name>
<a:Code>idPackage</a:Code>
<a:CreationDate>1628510805</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628510865</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:DataType>int</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
</o:Attribute>
<o:Attribute Id="o127">
<a:ObjectID>BD634F38-0B70-4DF7-A04D-4272AF25E189</a:ObjectID>
<a:Name>nomPackage</a:Name>
<a:Code>nomPackage</a:Code>
<a:CreationDate>1628510805</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628511026</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:DataType>String</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
</o:Attribute>
<o:Attribute Id="o128">
<a:ObjectID>122EE524-E6A4-49AF-AD0E-3A32C0B7DCA7</a:ObjectID>
<a:Name>nombreBienMax</a:Name>
<a:Code>nombreBienMax</a:Code>
<a:CreationDate>1628510805</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628511026</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:DataType>String</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
</o:Attribute>
<o:Attribute Id="o129">
<a:ObjectID>2F19CD4B-EF7F-4211-B9E5-9A843332AF59</a:ObjectID>
<a:Name>montantPackage</a:Name>
<a:Code>montantPackage</a:Code>
<a:CreationDate>1628510805</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628511026</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:DataType>double</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
</o:Attribute>
</c:Attributes>
<c:Identifiers>
<o:Identifier Id="o130">
<a:ObjectID>DAF2C922-D80F-493C-BFB0-56561EE7BE5D</a:ObjectID>
<a:Name>Identifiant_1</a:Name>
<a:Code>Identifiant_1</a:Code>
<a:CreationDate>1628510859</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628510865</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<c:Identifier.Attributes>
<o:Attribute Ref="o126"/>
</c:Identifier.Attributes>
</o:Identifier>
</c:Identifiers>
<c:PrimaryIdentifier>
<o:Identifier Ref="o130"/>
</c:PrimaryIdentifier>
</o:Class>
<o:Class Id="o71">
<a:ObjectID>996398A8-67D1-43DC-BEE1-4DBB101392E8</a:ObjectID>
<a:Name>Location</a:Name>
<a:Code>Location</a:Code>
<a:CreationDate>1628508308</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628512284</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:UseParentNamespace>0</a:UseParentNamespace>
<c:Attributes>
<o:Attribute Id="o131">
<a:ObjectID>B3E41DF9-7F33-4D57-9FDC-6BD0B61BF6E4</a:ObjectID>
<a:Name>idLocation</a:Name>
<a:Code>idLocation</a:Code>
<a:CreationDate>1628512019</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628512284</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:DataType>int</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
</o:Attribute>
<o:Attribute Id="o132">
<a:ObjectID>D9F6EE1C-A13C-47D1-9395-4EFE4E260EC7</a:ObjectID>
<a:Name>utilisation</a:Name>
<a:Code>utilisation</a:Code>
<a:CreationDate>1628512019</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628512157</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:DataType>String</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
</o:Attribute>
<o:Attribute Id="o133">
<a:ObjectID>F3A57249-90F7-441C-8BC9-1F4D3F5A8FA4</a:ObjectID>
<a:Name>activiteLocation</a:Name>
<a:Code>activiteLocation</a:Code>
<a:CreationDate>1628512019</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628512157</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:DataType>String</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
</o:Attribute>
<o:Attribute Id="o134">
<a:ObjectID>755A51D4-7472-4BD7-97C3-AB148F50762E</a:ObjectID>
<a:Name>dateDebutLocation</a:Name>
<a:Code>dateDebutLocation</a:Code>
<a:CreationDate>1628512019</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628512228</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:DataType>Date</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
</o:Attribute>
<o:Attribute Id="o135">
<a:ObjectID>77A178AD-7658-4FBB-AC6D-60704FE46B35</a:ObjectID>
<a:Name>dureeLocation</a:Name>
<a:Code>dureeLocation</a:Code>
<a:CreationDate>1628512019</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628512157</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:DataType>int</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
</o:Attribute>
<o:Attribute Id="o136">
<a:ObjectID>3F8934F1-DDA9-4D87-B075-2C7E652BA353</a:ObjectID>
<a:Name>dateLimitePaiement</a:Name>
<a:Code>dateLimitePaiement</a:Code>
<a:CreationDate>1628512019</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628512228</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:DataType>Date</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
</o:Attribute>
<o:Attribute Id="o137">
<a:ObjectID>E12E0AF2-C8F2-4118-BD44-8A5BDB59E3CB</a:ObjectID>
<a:Name>dateFacturation</a:Name>
<a:Code>dateFacturation</a:Code>
<a:CreationDate>1628512019</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628512228</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:DataType>Date</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
</o:Attribute>
<o:Attribute Id="o138">
<a:ObjectID>FB0F726A-3CD9-4B9B-B159-5A8158CD955E</a:ObjectID>
<a:Name>montantLocation</a:Name>
<a:Code>montantLocation</a:Code>
<a:CreationDate>1628512019</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628512281</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:DataType>double</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
</o:Attribute>
<o:Attribute Id="o139">
<a:ObjectID>B85CCF82-65AE-4D09-9DB5-03F0B7193CE9</a:ObjectID>
<a:Name>tauxChargeLocation</a:Name>
<a:Code>tauxChargeLocation</a:Code>
<a:CreationDate>1628512159</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628512228</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:DataType>int</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
</o:Attribute>
<o:Attribute Id="o140">
<a:ObjectID>4F29D795-DB33-4356-9F0A-FE901167E6E5</a:ObjectID>
<a:Name>montantCaution</a:Name>
<a:Code>montantCaution</a:Code>
<a:CreationDate>1628512159</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628512281</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:DataType>double</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
</o:Attribute>
<o:Attribute Id="o141">
<a:ObjectID>542A2706-4882-4476-92FA-0416B48CFBCF</a:ObjectID>
<a:Name>tauxRetard</a:Name>
<a:Code>tauxRetard</a:Code>
<a:CreationDate>1628512159</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628512228</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:DataType>int</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
</o:Attribute>
<o:Attribute Id="o142">
<a:ObjectID>9E0B944A-4621-4F76-95B0-28DDFF924545</a:ObjectID>
<a:Name>MinimumAPayer</a:Name>
<a:Code>MinimumAPayer</a:Code>
<a:CreationDate>1628512230</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628512281</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:DataType>int</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
</o:Attribute>
</c:Attributes>
<c:Identifiers>
<o:Identifier Id="o143">
<a:ObjectID>0E11BE1D-D0F5-44AB-B22A-6688018F2119</a:ObjectID>
<a:Name>Identifiant_1</a:Name>
<a:Code>Identifiant_1</a:Code>
<a:CreationDate>1628512281</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628512284</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<c:Identifier.Attributes>
<o:Attribute Ref="o131"/>
</c:Identifier.Attributes>
</o:Identifier>
</c:Identifiers>
<c:PrimaryIdentifier>
<o:Identifier Ref="o143"/>
</c:PrimaryIdentifier>
</o:Class>
<o:Class Id="o72">
<a:ObjectID>9D7C74C3-0A3D-499B-A985-137AC61F092C</a:ObjectID>
<a:Name>Quittance</a:Name>
<a:Code>Quittance</a:Code>
<a:CreationDate>1628508312</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628512407</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:UseParentNamespace>0</a:UseParentNamespace>
<c:Attributes>
<o:Attribute Id="o144">
<a:ObjectID>F6A09B86-A360-465C-B888-88C6E02C3611</a:ObjectID>
<a:Name>idQuittance</a:Name>
<a:Code>idQuittance</a:Code>
<a:CreationDate>1628512350</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628512407</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:DataType>int</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
</o:Attribute>
<o:Attribute Id="o145">
<a:ObjectID>F38B0C24-E76F-4B30-9002-C0EB61114CC2</a:ObjectID>
<a:Name>dateQuittance</a:Name>
<a:Code>dateQuittance</a:Code>
<a:CreationDate>1628512350</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628512398</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:DataType>Date</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
</o:Attribute>
<o:Attribute Id="o146">
<a:ObjectID>A0FDAB09-0913-4173-9A87-C2D296047A2A</a:ObjectID>
<a:Name>montantQuittance</a:Name>
<a:Code>montantQuittance</a:Code>
<a:CreationDate>1628512350</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628512398</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:DataType>double</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
</o:Attribute>
</c:Attributes>
<c:Identifiers>
<o:Identifier Id="o147">
<a:ObjectID>8A8B8EFC-4F8C-4885-B041-672BD7D04C85</a:ObjectID>
<a:Name>Identifiant_1</a:Name>
<a:Code>Identifiant_1</a:Code>
<a:CreationDate>1628512403</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628512407</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<c:Identifier.Attributes>
<o:Attribute Ref="o144"/>
</c:Identifier.Attributes>
</o:Identifier>
</c:Identifiers>
<c:PrimaryIdentifier>
<o:Identifier Ref="o147"/>
</c:PrimaryIdentifier>
</o:Class>
<o:Class Id="o73">
<a:ObjectID>59252741-696B-424B-9196-86CD306D378D</a:ObjectID>
<a:Name>Type de location</a:Name>
<a:Code>Type_de_location</a:Code>
<a:CreationDate>1628508314</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628512007</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:UseParentNamespace>0</a:UseParentNamespace>
<c:Attributes>
<o:Attribute Id="o148">
<a:ObjectID>49FF9927-1EE1-4BAE-9C97-4EDF91AD099D</a:ObjectID>
<a:Name>idTl</a:Name>
<a:Code>idTl</a:Code>
<a:CreationDate>1628511976</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628512007</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:DataType>int</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
</o:Attribute>
<o:Attribute Id="o149">
<a:ObjectID>4DA4681B-985B-4D88-B707-DE0B70756BE7</a:ObjectID>
<a:Name>nomTypeLocation</a:Name>
<a:Code>nomTypeLocation</a:Code>
<a:CreationDate>1628511976</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628512005</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:DataType>String</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
</o:Attribute>
</c:Attributes>
<c:Identifiers>
<o:Identifier Id="o150">
<a:ObjectID>96C800CF-0602-422D-B99C-58ED58153714</a:ObjectID>
<a:Name>Identifiant_1</a:Name>
<a:Code>Identifiant_1</a:Code>
<a:CreationDate>1628512005</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628512007</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<c:Identifier.Attributes>
<o:Attribute Ref="o148"/>
</c:Identifier.Attributes>
</o:Identifier>
</c:Identifiers>
<c:PrimaryIdentifier>
<o:Identifier Ref="o150"/>
</c:PrimaryIdentifier>
</o:Class>
<o:Class Id="o74">
<a:ObjectID>93E4C9E1-E2D6-4E60-B7F9-33B2D86CAAB5</a:ObjectID>
<a:Name>Facture</a:Name>
<a:Code>Facture</a:Code>
<a:CreationDate>1628508318</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628513886</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:UseParentNamespace>0</a:UseParentNamespace>
<c:Attributes>
<o:Attribute Id="o151">
<a:ObjectID>99E56D4B-0172-4261-93E6-9B547F192683</a:ObjectID>
<a:Name>idFacture</a:Name>
<a:Code>idFacture</a:Code>
<a:CreationDate>1628512436</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628513886</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:DataType>int</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
</o:Attribute>
<o:Attribute Id="o152">
<a:ObjectID>03AEBB90-232F-4B40-9B1C-7441D70EC20E</a:ObjectID>
<a:Name>dateFacture</a:Name>
<a:Code>dateFacture</a:Code>
<a:CreationDate>1628512436</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628512512</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:DataType>Date</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
</o:Attribute>
<o:Attribute Id="o153">
<a:ObjectID>196F3BA5-2014-4AC1-8F59-DDC66D97B535</a:ObjectID>
<a:Name>montantFacture</a:Name>
<a:Code>montantFacture</a:Code>
<a:CreationDate>1628512436</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628512512</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:DataType>double</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
</o:Attribute>
<o:Attribute Id="o154">
<a:ObjectID>08D3C204-3133-403C-9CF1-4B42AB40C7F0</a:ObjectID>
<a:Name>etatFacture</a:Name>
<a:Code>etatFacture</a:Code>
<a:CreationDate>1628512436</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628512512</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:DataType>boolean</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
</o:Attribute>
</c:Attributes>
<c:Identifiers>
<o:Identifier Id="o155">
<a:ObjectID>1C0AE93F-A699-4358-8F69-9F3825BF099A</a:ObjectID>
<a:Name>Identifiant_1</a:Name>
<a:Code>Identifiant_1</a:Code>
<a:CreationDate>1628513884</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628513886</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<c:Identifier.Attributes>
<o:Attribute Ref="o151"/>
</c:Identifier.Attributes>
</o:Identifier>
</c:Identifiers>
<c:PrimaryIdentifier>
<o:Identifier Ref="o155"/>
</c:PrimaryIdentifier>
</o:Class>
<o:Class Id="o75">
<a:ObjectID>2A63C7E5-9370-4C78-8C7F-CE6A53C3405E</a:ObjectID>
<a:Name>Article</a:Name>
<a:Code>Article</a:Code>
<a:CreationDate>1628508378</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628511763</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:UseParentNamespace>0</a:UseParentNamespace>
<c:Attributes>
<o:Attribute Id="o156">
<a:ObjectID>2F6A3CE3-32EF-416C-82AA-C605AD855488</a:ObjectID>
<a:Name>idArticle</a:Name>
<a:Code>idArticle</a:Code>
<a:CreationDate>1628511714</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628511763</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:DataType>int</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
</o:Attribute>
<o:Attribute Id="o157">
<a:ObjectID>25B18168-09B2-46F3-9E21-CB877B744565</a:ObjectID>
<a:Name>titreArticle</a:Name>
<a:Code>titreArticle</a:Code>
<a:CreationDate>1628511714</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628511759</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:DataType>String</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
</o:Attribute>
<o:Attribute Id="o158">
<a:ObjectID>7C1E9848-C758-4789-89E6-90FF58D52D7A</a:ObjectID>
<a:Name>descriptionArticle</a:Name>
<a:Code>descriptionArticle</a:Code>
<a:CreationDate>1628511714</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628511759</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:DataType>String</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
</o:Attribute>
</c:Attributes>
<c:Identifiers>
<o:Identifier Id="o159">
<a:ObjectID>1EF54D38-ED18-4CA2-9697-1C5945D293CE</a:ObjectID>
<a:Name>Identifiant_1</a:Name>
<a:Code>Identifiant_1</a:Code>
<a:CreationDate>1628511759</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628511763</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<c:Identifier.Attributes>
<o:Attribute Ref="o156"/>
</c:Identifier.Attributes>
</o:Identifier>
</c:Identifiers>
<c:PrimaryIdentifier>
<o:Identifier Ref="o159"/>
</c:PrimaryIdentifier>
</o:Class>
<o:Class Id="o76">
<a:ObjectID>16CAA9D3-3295-4A5C-AA4A-3FA92492799D</a:ObjectID>
<a:Name>Bien</a:Name>
<a:Code>Bien</a:Code>
<a:CreationDate>1628508399</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628512723</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:UseParentNamespace>0</a:UseParentNamespace>
<c:Attributes>
<o:Attribute Id="o160">
<a:ObjectID>5B304156-6CFA-445B-B74D-E7A76B79B139</a:ObjectID>
<a:Name>idBien</a:Name>
<a:Code>idBien</a:Code>
<a:CreationDate>1628512539</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628512723</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:DataType>int</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
</o:Attribute>
<o:Attribute Id="o161">
<a:ObjectID>AABF602D-9BF5-4062-ACDA-86C16E18068A</a:ObjectID>
<a:Name>nomBien</a:Name>
<a:Code>nomBien</a:Code>
<a:CreationDate>1628512539</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628512719</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:DataType>String</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
</o:Attribute>
<o:Attribute Id="o162">
<a:ObjectID>CF6D6BCA-9974-4470-A4B7-0A6177399B9B</a:ObjectID>
<a:Name>numTitreFoncier</a:Name>
<a:Code>numTitreFoncier</a:Code>
<a:CreationDate>1628512539</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628512741</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:DataType>String</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
</o:Attribute>
<o:Attribute Id="o163">
<a:ObjectID>5F02C575-1ACA-4DD3-803D-34D3F3038023</a:ObjectID>
<a:Name>numPermisConst</a:Name>
<a:Code>numPermisConst</a:Code>
<a:CreationDate>1628512539</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628512741</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:DataType>String</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
</o:Attribute>
<o:Attribute Id="o164">
<a:ObjectID>F6590262-F98A-4AC4-AADF-6A8F29E80B97</a:ObjectID>
<a:Name>descriptionBien</a:Name>
<a:Code>descriptionBien</a:Code>
<a:CreationDate>1628512539</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628512719</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:DataType>String</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
</o:Attribute>
<o:Attribute Id="o165">
<a:ObjectID>75EB4C26-6976-4692-9BF5-B403598CD9B6</a:ObjectID>
<a:Name>imageBien</a:Name>
<a:Code>imageBien</a:Code>
<a:CreationDate>1628512539</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628512719</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:DataType>String</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
</o:Attribute>
<o:Attribute Id="o166">
<a:ObjectID>257AE48B-E26E-49E1-AFA6-5E762F2D296A</a:ObjectID>
<a:Name>supercieBien</a:Name>
<a:Code>supercieBien</a:Code>
<a:CreationDate>1628512539</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628512719</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:DataType>double</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
</o:Attribute>
<o:Attribute Id="o167">
<a:ObjectID>8B51DB58-2CDA-4C0D-8E67-EEB737F64876</a:ObjectID>
<a:Name>villeBien</a:Name>
<a:Code>villeBien</a:Code>
<a:CreationDate>1628512539</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628512719</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:DataType>String</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
</o:Attribute>
<o:Attribute Id="o168">
<a:ObjectID>4703550B-2A19-4D0B-AC00-F67C9AAD2349</a:ObjectID>
<a:Name>quartierBien</a:Name>
<a:Code>quartierBien</a:Code>
<a:CreationDate>1628512539</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628512719</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:DataType>String</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
</o:Attribute>
<o:Attribute Id="o169">
<a:ObjectID>12C04AFC-06BF-4A61-B9FD-4C5E27765FB5</a:ObjectID>
<a:Name>paysBien</a:Name>
<a:Code>paysBien</a:Code>
<a:CreationDate>1628512539</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628512719</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:DataType>String</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
</o:Attribute>
<o:Attribute Id="o170">
<a:ObjectID>83F9A861-70CF-4DFE-89EF-3975CC039A4C</a:ObjectID>
<a:Name>etatBien</a:Name>
<a:Code>etatBien</a:Code>
<a:CreationDate>1628512539</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628512719</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:DataType>boolean</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
</o:Attribute>
</c:Attributes>
<c:Identifiers>
<o:Identifier Id="o171">
<a:ObjectID>F90F47B9-2523-4414-AEF3-167087FD14A9</a:ObjectID>
<a:Name>Identifiant_1</a:Name>
<a:Code>Identifiant_1</a:Code>
<a:CreationDate>1628512719</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628512723</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<c:Identifier.Attributes>
<o:Attribute Ref="o160"/>
</c:Identifier.Attributes>
</o:Identifier>
</c:Identifiers>
<c:PrimaryIdentifier>
<o:Identifier Ref="o171"/>
</c:PrimaryIdentifier>
</o:Class>
<o:Class Id="o77">
<a:ObjectID>F2BB4626-206C-46C3-9E82-4A1C8E754D5E</a:ObjectID>
<a:Name>Piece</a:Name>
<a:Code>Piece</a:Code>
<a:CreationDate>1628508436</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628512927</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:UseParentNamespace>0</a:UseParentNamespace>
<c:Attributes>
<o:Attribute Id="o172">
<a:ObjectID>9B1FB773-5C5C-41C9-93A6-5DF9E8A06FE0</a:ObjectID>
<a:Name>idPiece</a:Name>
<a:Code>idPiece</a:Code>
<a:CreationDate>1628512891</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628512927</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:DataType>int</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
</o:Attribute>
<o:Attribute Id="o173">
<a:ObjectID>4B6C1708-5044-44A0-93D6-65CC54B76504</a:ObjectID>
<a:Name>nomPiece</a:Name>
<a:Code>nomPiece</a:Code>
<a:CreationDate>1628512891</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628512924</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:DataType>String</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
</o:Attribute>
</c:Attributes>
<c:Identifiers>
<o:Identifier Id="o174">
<a:ObjectID>7441F8A1-FAB4-4C40-A3C7-5D2C0BD13EBF</a:ObjectID>
<a:Name>Identifiant_1</a:Name>
<a:Code>Identifiant_1</a:Code>
<a:CreationDate>1628512924</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628512927</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<c:Identifier.Attributes>
<o:Attribute Ref="o172"/>
</c:Identifier.Attributes>
</o:Identifier>
</c:Identifiers>
<c:PrimaryIdentifier>
<o:Identifier Ref="o174"/>
</c:PrimaryIdentifier>
</o:Class>
<o:Class Id="o78">
<a:ObjectID>EAEF3FED-49E2-4B69-9CA6-0BFE2F3F2C74</a:ObjectID>
<a:Name>Equipement</a:Name>
<a:Code>Equipement</a:Code>
<a:CreationDate>1628508437</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628513019</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:UseParentNamespace>0</a:UseParentNamespace>
<c:Attributes>
<o:Attribute Id="o175">
<a:ObjectID>25E725EB-E54B-4F7A-AC81-810F472FAA90</a:ObjectID>
<a:Name>idEquipement</a:Name>
<a:Code>idEquipement</a:Code>
<a:CreationDate>1628512938</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628513019</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:DataType>int</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
</o:Attribute>
<o:Attribute Id="o176">
<a:ObjectID>B016118F-4934-4436-8670-7E6A33D8C50E</a:ObjectID>
<a:Name>nomEquipement</a:Name>
<a:Code>nomEquipement</a:Code>
<a:CreationDate>1628512938</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628513017</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:DataType>String</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
</o:Attribute>
<o:Attribute Id="o177">
<a:ObjectID>7ACBFCC9-F42A-4E42-9E5E-5BE557F0CE7E</a:ObjectID>
<a:Name>etatEquipement</a:Name>
<a:Code>etatEquipement</a:Code>
<a:CreationDate>1628512938</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628513017</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:DataType>String</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
</o:Attribute>
<o:Attribute Id="o178">
<a:ObjectID>5C8DB800-0AB9-4BE4-8841-1D67D44CBAF9</a:ObjectID>
<a:Name>prixEquipement</a:Name>
<a:Code>prixEquipement</a:Code>
<a:CreationDate>1628512938</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628513017</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:DataType>double</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
</o:Attribute>
<o:Attribute Id="o179">
<a:ObjectID>F8C303DF-D2A0-48B5-9C76-1AFEB85B0D58</a:ObjectID>
<a:Name>commentaire</a:Name>
<a:Code>commentaire</a:Code>
<a:CreationDate>1628512938</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628513017</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:DataType>String</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
</o:Attribute>
</c:Attributes>
<c:Identifiers>
<o:Identifier Id="o180">
<a:ObjectID>AAEFC6FA-572E-44D5-B5C7-9658B825C4FC</a:ObjectID>
<a:Name>Identifiant_1</a:Name>
<a:Code>Identifiant_1</a:Code>
<a:CreationDate>1628513017</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628513019</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<c:Identifier.Attributes>
<o:Attribute Ref="o175"/>
</c:Identifier.Attributes>
</o:Identifier>
</c:Identifiers>
<c:PrimaryIdentifier>
<o:Identifier Ref="o180"/>
</c:PrimaryIdentifier>
</o:Class>
<o:Class Id="o79">
<a:ObjectID>965BAB19-3096-43FB-9A3B-B8D73277F2D0</a:ObjectID>
<a:Name>photo</a:Name>
<a:Code>photo</a:Code>
<a:CreationDate>1628508471</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628511954</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:UseParentNamespace>0</a:UseParentNamespace>
<c:Attributes>
<o:Attribute Id="o181">
<a:ObjectID>7DFF373C-4134-467F-979D-2554B30D2C64</a:ObjectID>
<a:Name>idPhoto</a:Name>
<a:Code>idPhoto</a:Code>
<a:CreationDate>1628511927</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628511954</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:DataType>int</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
</o:Attribute>
<o:Attribute Id="o182">
<a:ObjectID>5EED281B-94A6-489B-BD94-C5E1C0B04DCA</a:ObjectID>
<a:Name>nomPhoto</a:Name>
<a:Code>nomPhoto</a:Code>
<a:CreationDate>1628511927</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628511950</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:DataType>String</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
</o:Attribute>
</c:Attributes>
<c:Identifiers>
<o:Identifier Id="o183">
<a:ObjectID>D901F64A-6F01-4647-A9DE-A200E40576CC</a:ObjectID>
<a:Name>Identifiant_1</a:Name>
<a:Code>Identifiant_1</a:Code>
<a:CreationDate>1628511950</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628511954</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<c:Identifier.Attributes>
<o:Attribute Ref="o181"/>
</c:Identifier.Attributes>
</o:Identifier>
</c:Identifiers>
<c:PrimaryIdentifier>
<o:Identifier Ref="o183"/>
</c:PrimaryIdentifier>
</o:Class>
<o:Class Id="o80">
<a:ObjectID>DF1DA332-7D7F-44B1-B3F2-DF77523780E2</a:ObjectID>
<a:Name>Type de bien</a:Name>
<a:Code>Type_de_bien</a:Code>
<a:CreationDate>1628508474</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628513900</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:UseParentNamespace>0</a:UseParentNamespace>
<c:Attributes>
<o:Attribute Id="o184">
<a:ObjectID>09419AE4-CBB3-4ACA-B327-5100C01267EA</a:ObjectID>
<a:Name>idTypeBien</a:Name>
<a:Code>idTypeBien</a:Code>
<a:CreationDate>1628512761</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628513900</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:DataType>int</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
</o:Attribute>
<o:Attribute Id="o185">
<a:ObjectID>04821F48-6527-4856-A86B-503237835FFA</a:ObjectID>
<a:Name>nomTypeBien</a:Name>
<a:Code>nomTypeBien</a:Code>
<a:CreationDate>1628512761</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628512794</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:DataType>String</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
</o:Attribute>
</c:Attributes>
<c:Identifiers>
<o:Identifier Id="o186">
<a:ObjectID>358D8B89-3885-4333-A74E-9123DA44710A</a:ObjectID>
<a:Name>Identifiant_1</a:Name>
<a:Code>Identifiant_1</a:Code>
<a:CreationDate>1628513898</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628513900</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<c:Identifier.Attributes>
<o:Attribute Ref="o184"/>
</c:Identifier.Attributes>
</o:Identifier>
</c:Identifiers>
<c:PrimaryIdentifier>
<o:Identifier Ref="o186"/>
</c:PrimaryIdentifier>
</o:Class>
<o:Class Id="o81">
<a:ObjectID>94E76D0C-AF4C-4C13-9ECD-8786B9EF4460</a:ObjectID>
<a:Name>Inventaire</a:Name>
<a:Code>Inventaire</a:Code>
<a:CreationDate>1628508520</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628513875</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:UseParentNamespace>0</a:UseParentNamespace>
<c:Attributes>
<o:Attribute Id="o187">
<a:ObjectID>CC69FC72-158C-46D8-83D6-331709CC3BBA</a:ObjectID>
<a:Name>idInventaire</a:Name>
<a:Code>idInventaire</a:Code>
<a:CreationDate>1628513035</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628513875</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:DataType>int</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
</o:Attribute>
<o:Attribute Id="o188">
<a:ObjectID>02A7BFC1-3EF2-4297-9B59-D38996C11173</a:ObjectID>
<a:Name>descriptionInventaire</a:Name>
<a:Code>descriptionInventaire</a:Code>
<a:CreationDate>1628513035</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628513103</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:DataType>String</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
</o:Attribute>
<o:Attribute Id="o189">
<a:ObjectID>92C6D327-3DE5-4ACB-9629-79D5CFAD0B44</a:ObjectID>
<a:Name>dateInventaire</a:Name>
<a:Code>dateInventaire</a:Code>
<a:CreationDate>1628513035</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628513103</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:DataType>Date</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
</o:Attribute>
</c:Attributes>
<c:Identifiers>
<o:Identifier Id="o190">
<a:ObjectID>12E37D3B-8176-4110-88F4-3890A64927F8</a:ObjectID>
<a:Name>Identifiant_1</a:Name>
<a:Code>Identifiant_1</a:Code>
<a:CreationDate>1628513871</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628513875</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<c:Identifier.Attributes>
<o:Attribute Ref="o187"/>
</c:Identifier.Attributes>
</o:Identifier>
</c:Identifiers>
<c:PrimaryIdentifier>
<o:Identifier Ref="o190"/>
</c:PrimaryIdentifier>
</o:Class>
<o:Class Id="o82">
<a:ObjectID>D43DC37B-327C-49DA-A8EA-FF23EC33A0CA</a:ObjectID>
<a:Name>Etat des lieux</a:Name>
<a:Code>Etat_des_lieux</a:Code>
<a:CreationDate>1628508520</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628513179</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:UseParentNamespace>0</a:UseParentNamespace>
<c:Attributes>
<o:Attribute Id="o191">
<a:ObjectID>E249AF66-29FC-4E01-B636-7591CD9074F2</a:ObjectID>
<a:Name>idEtatLieu</a:Name>
<a:Code>idEtatLieu</a:Code>
<a:CreationDate>1628513123</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628513179</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:DataType>int</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
</o:Attribute>
<o:Attribute Id="o192">
<a:ObjectID>196CD635-51CF-48B7-B620-DB4BD23A7EA1</a:ObjectID>
<a:Name>descriptionEtatLieu</a:Name>
<a:Code>descriptionEtatLieu</a:Code>
<a:CreationDate>1628513123</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628513176</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:DataType>String</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
</o:Attribute>
<o:Attribute Id="o193">
<a:ObjectID>92890282-B4DA-49F6-B0A4-C1ADD8D18941</a:ObjectID>
<a:Name>dateEtatLieu</a:Name>
<a:Code>dateEtatLieu</a:Code>
<a:CreationDate>1628513123</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628513176</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:DataType>Date</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
</o:Attribute>
</c:Attributes>
<c:Identifiers>
<o:Identifier Id="o194">
<a:ObjectID>4D32009C-271F-4260-993B-AEB8D79CF24F</a:ObjectID>
<a:Name>Identifiant_1</a:Name>
<a:Code>Identifiant_1</a:Code>
<a:CreationDate>1628513176</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628513179</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<c:Identifier.Attributes>
<o:Attribute Ref="o191"/>
</c:Identifier.Attributes>
</o:Identifier>
</c:Identifiers>
<c:PrimaryIdentifier>
<o:Identifier Ref="o194"/>
</c:PrimaryIdentifier>
</o:Class>
<o:Class Id="o83">
<a:ObjectID>EB297DE7-0727-4871-AD3B-092E7D427647</a:ObjectID>
<a:Name>Rénovation</a:Name>
<a:Code>Renovation</a:Code>
<a:CreationDate>1628508521</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628513329</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:UseParentNamespace>0</a:UseParentNamespace>
<c:Attributes>
<o:Attribute Id="o195">
<a:ObjectID>B63E92B1-1977-4C78-B8DC-CCA9315B245F</a:ObjectID>
<a:Name>idRenovation</a:Name>
<a:Code>idRenovation</a:Code>
<a:CreationDate>1628513193</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628513329</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:DataType>int</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
</o:Attribute>
<o:Attribute Id="o196">
<a:ObjectID>60308D1E-321B-4FFB-ABC0-E5B6DC670E59</a:ObjectID>
<a:Name>motifRenovation</a:Name>
<a:Code>motifRenovation</a:Code>
<a:CreationDate>1628513193</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628513326</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:DataType>String</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
</o:Attribute>
<o:Attribute Id="o197">
<a:ObjectID>3EE835B5-C73D-4453-9876-D3C2B2C14144</a:ObjectID>
<a:Name>domaineRenovation</a:Name>
<a:Code>domaineRenovation</a:Code>
<a:CreationDate>1628513193</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628513326</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:DataType>String</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
</o:Attribute>
<o:Attribute Id="o198">
<a:ObjectID>1FD1D8F8-23AA-44BF-B89F-0EC04D71ADED</a:ObjectID>
<a:Name>descriptionRenovation</a:Name>
<a:Code>descriptionRenovation</a:Code>
<a:CreationDate>1628513193</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628513326</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:DataType>String</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
</o:Attribute>
<o:Attribute Id="o199">
<a:ObjectID>1AE0EB4F-E0F6-4F1C-839B-FE47B92C9CDC</a:ObjectID>
<a:Name>montantRenovation</a:Name>
<a:Code>montantRenovation</a:Code>
<a:CreationDate>1628513193</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628513326</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:DataType>double</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
</o:Attribute>
<o:Attribute Id="o200">
<a:ObjectID>6290041F-5E60-4CA3-BD35-9853DA2A8705</a:ObjectID>
<a:Name>priorite</a:Name>
<a:Code>priorite</a:Code>
<a:CreationDate>1628513193</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628513326</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:DataType>String</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
</o:Attribute>
<o:Attribute Id="o201">
<a:ObjectID>FDDBDB6C-DF4B-4870-9A38-6040DF58B2C8</a:ObjectID>
<a:Name>statut</a:Name>
<a:Code>statut</a:Code>
<a:CreationDate>1628513193</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628513326</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:DataType>String</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
</o:Attribute>
</c:Attributes>
<c:Identifiers>
<o:Identifier Id="o202">
<a:ObjectID>CC1DAEA2-E26A-48C6-B682-3343FFAE26F5</a:ObjectID>
<a:Name>Identifiant_1</a:Name>
<a:Code>Identifiant_1</a:Code>
<a:CreationDate>1628513326</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628513329</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<c:Identifier.Attributes>
<o:Attribute Ref="o195"/>
</c:Identifier.Attributes>
</o:Identifier>
</c:Identifiers>
<c:PrimaryIdentifier>
<o:Identifier Ref="o202"/>
</c:PrimaryIdentifier>
</o:Class>
<o:Class Id="o84">
<a:ObjectID>6FA769CA-5ECF-4BB0-846C-2EA536F6EAD8</a:ObjectID>
<a:Name>note</a:Name>
<a:Code>note</a:Code>
<a:CreationDate>1629804900</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1629804948</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:UseParentNamespace>0</a:UseParentNamespace>
<c:Attributes>
<o:Attribute Id="o203">
<a:ObjectID>1C83765A-3ADA-47C6-A0B2-2A8D9C136362</a:ObjectID>
<a:Name>idNote</a:Name>
<a:Code>idNote</a:Code>
<a:CreationDate>1629804900</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1629804948</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:DataType>int</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
</o:Attribute>
<o:Attribute Id="o204">
<a:ObjectID>799AAAD4-8032-4333-ADFC-2C61600F34F3</a:ObjectID>
<a:Name>valeur</a:Name>
<a:Code>valeur</a:Code>
<a:CreationDate>1629804900</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1629804948</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:DataType>int</a:DataType>
<a:Attribute.Visibility>-</a:Attribute.Visibility>
</o:Attribute>
</c:Attributes>
<c:Identifiers>
<o:Identifier Id="o205">
<a:ObjectID>DA76B038-52FA-44AA-8A48-F9D7C094DC22</a:ObjectID>
<a:Name>Identifiant_1</a:Name>
<a:Code>Identifiant_1</a:Code>
<a:CreationDate>1629804900</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1629804900</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<c:Identifier.Attributes>
<o:Attribute Ref="o203"/>
</c:Identifier.Attributes>
</o:Identifier>
</c:Identifiers>
<c:PrimaryIdentifier>
<o:Identifier Ref="o205"/>
</c:PrimaryIdentifier>
</o:Class>
</c:Classes>
<c:Associations>
<o:Association Id="o17">
<a:ObjectID>DD41A332-7E20-4DB4-9B01-4E7A3AF47E3B</a:ObjectID>
<a:Name>Association_1</a:Name>
<a:Code>Association_1</a:Code>
<a:CreationDate>1628508741</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628508794</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:RoleAMultiplicity>1..1</a:RoleAMultiplicity>
<a:RoleBMultiplicity>0..*</a:RoleBMultiplicity>
<c:Object1>
<o:Class Ref="o69"/>
</c:Object1>
<c:Object2>
<o:Class Ref="o68"/>
</c:Object2>
</o:Association>
<o:Association Id="o20">
<a:ObjectID>21317895-2EC3-4413-8204-3BBB7E9D18D8</a:ObjectID>
<a:Name>Association_3</a:Name>
<a:Code>Association_3</a:Code>
<a:CreationDate>1628508748</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1630754098</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:RoleAMultiplicity>0..*</a:RoleAMultiplicity>
<a:RoleBMultiplicity>0..*</a:RoleBMultiplicity>
<c:Object1>
<o:Class Ref="o65"/>
</c:Object1>
<c:Object2>
<o:Class Ref="o70"/>
</c:Object2>
</o:Association>
<o:Association Id="o23">
<a:ObjectID>BA408B1C-AFD4-4D3C-8DB7-D638EFEB5302</a:ObjectID>
<a:Name>Association_4</a:Name>
<a:Code>Association_4</a:Code>
<a:CreationDate>1628508814</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628508870</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:RoleAMultiplicity>1..1</a:RoleAMultiplicity>
<a:RoleBMultiplicity>1..*</a:RoleBMultiplicity>
<c:Object1>
<o:Class Ref="o71"/>
</c:Object1>
<c:Object2>
<o:Class Ref="o67"/>
</c:Object2>
</o:Association>
<o:Association Id="o26">
<a:ObjectID>A569AFF1-78D4-49C0-A110-0FC1DCF46162</a:ObjectID>
<a:Name>Association_5</a:Name>
<a:Code>Association_5</a:Code>
<a:CreationDate>1628508818</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628508929</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:RoleAMultiplicity>1..*</a:RoleAMultiplicity>
<a:RoleBMultiplicity>1..1</a:RoleBMultiplicity>
<c:Object1>
<o:Class Ref="o71"/>
</c:Object1>
<c:Object2>
<o:Class Ref="o72"/>
</c:Object2>
</o:Association>
<o:Association Id="o29">
<a:ObjectID>6D3F152C-8E24-41EA-B129-701A59347692</a:ObjectID>
<a:Name>Association_6</a:Name>
<a:Code>Association_6</a:Code>
<a:CreationDate>1628508820</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628508942</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:RoleAMultiplicity>1..1</a:RoleAMultiplicity>
<a:RoleBMultiplicity>1..*</a:RoleBMultiplicity>
<c:Object1>
<o:Class Ref="o71"/>
</c:Object1>
<c:Object2>
<o:Class Ref="o73"/>
</c:Object2>
</o:Association>
<o:Association Id="o32">
<a:ObjectID>9E6E2485-424A-4766-B759-F5EA348D01B0</a:ObjectID>
<a:Name>Association_7</a:Name>
<a:Code>Association_7</a:Code>
<a:CreationDate>1628508822</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628508917</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:RoleAMultiplicity>1..*</a:RoleAMultiplicity>
<a:RoleBMultiplicity>1..1</a:RoleBMultiplicity>
<c:Object1>
<o:Class Ref="o71"/>
</c:Object1>
<c:Object2>
<o:Class Ref="o74"/>
</c:Object2>
</o:Association>
<o:Association Id="o35">
<a:ObjectID>3AA4F90F-5841-4250-A73C-C8E7B1A98E62</a:ObjectID>
<a:Name>Association_8</a:Name>
<a:Code>Association_8</a:Code>
<a:CreationDate>1628508953</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628508968</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:RoleAMultiplicity>1..1</a:RoleAMultiplicity>
<a:RoleBMultiplicity>0..*</a:RoleBMultiplicity>
<c:Object1>
<o:Class Ref="o75"/>
</c:Object1>
<c:Object2>
<o:Class Ref="o66"/>
</c:Object2>
</o:Association>
<o:Association Id="o38">
<a:ObjectID>0D566DAC-E657-4F23-B7EA-E208DB99E40E</a:ObjectID>
<a:Name>Association_9</a:Name>
<a:Code>Association_9</a:Code>
<a:CreationDate>1628508992</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628509228</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:RoleAMultiplicity>1..1</a:RoleAMultiplicity>
<a:RoleBMultiplicity>1..*</a:RoleBMultiplicity>
<c:Object1>
<o:Class Ref="o76"/>
</c:Object1>
<c:Object2>
<o:Class Ref="o66"/>
</c:Object2>
</o:Association>
<o:Association Id="o41">
<a:ObjectID>9C832362-0C41-4510-850B-D5838CEABA61</a:ObjectID>
<a:Name>Association_10</a:Name>
<a:Code>Association_10</a:Code>
<a:CreationDate>1628509239</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628509342</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:RoleAMultiplicity>1..1</a:RoleAMultiplicity>
<a:RoleBMultiplicity>1..*</a:RoleBMultiplicity>
<c:Object1>
<o:Class Ref="o79"/>
</c:Object1>
<c:Object2>
<o:Class Ref="o76"/>
</c:Object2>
</o:Association>
<o:Association Id="o44">
<a:ObjectID>58BDB203-AE5D-4386-95BC-3900D2322EBF</a:ObjectID>
<a:Name>Association_11</a:Name>
<a:Code>Association_11</a:Code>
<a:CreationDate>1628509241</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628509383</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:RoleAMultiplicity>1..*</a:RoleAMultiplicity>
<a:RoleBMultiplicity>1..1</a:RoleBMultiplicity>
<c:Object1>
<o:Class Ref="o80"/>
</c:Object1>
<c:Object2>
<o:Class Ref="o76"/>
</c:Object2>
</o:Association>
<o:Association Id="o47">
<a:ObjectID>FAAD3CCF-E595-456E-9ACD-6D47FF1ED797</a:ObjectID>
<a:Name>Association_12</a:Name>
<a:Code>Association_12</a:Code>
<a:CreationDate>1628509391</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628509428</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:RoleAMultiplicity>1..1</a:RoleAMultiplicity>
<a:RoleBMultiplicity>1..*</a:RoleBMultiplicity>
<c:Object1>
<o:Class Ref="o77"/>
</c:Object1>
<c:Object2>
<o:Class Ref="o76"/>
</c:Object2>
</o:Association>
<o:Association Id="o50">
<a:ObjectID>7506B195-7BC7-43F6-97D0-F89E25C04D76</a:ObjectID>
<a:Name>Association_13</a:Name>
<a:Code>Association_13</a:Code>
<a:CreationDate>1628509392</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628509441</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:RoleAMultiplicity>1..1</a:RoleAMultiplicity>
<a:RoleBMultiplicity>1..*</a:RoleBMultiplicity>
<c:Object1>
<o:Class Ref="o78"/>
</c:Object1>
<c:Object2>
<o:Class Ref="o77"/>
</c:Object2>
</o:Association>
<o:Association Id="o53">
<a:ObjectID>D79690DB-E8D9-4C43-996E-FBD0E7854E0A</a:ObjectID>
<a:Name>Association_14</a:Name>
<a:Code>Association_14</a:Code>
<a:CreationDate>1628509481</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628509579</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:RoleAMultiplicity>0..*</a:RoleAMultiplicity>
<a:RoleBMultiplicity>1..1</a:RoleBMultiplicity>
<c:Object1>
<o:Class Ref="o76"/>
</c:Object1>
<c:Object2>
<o:Class Ref="o81"/>
</c:Object2>
</o:Association>
<o:Association Id="o56">
<a:ObjectID>93EC1304-2915-4D74-89CF-930988CECBE8</a:ObjectID>
<a:Name>Association_15</a:Name>
<a:Code>Association_15</a:Code>
<a:CreationDate>1628509484</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628509593</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:RoleAMultiplicity>0..*</a:RoleAMultiplicity>
<a:RoleBMultiplicity>1..1</a:RoleBMultiplicity>
<c:Object1>
<o:Class Ref="o76"/>
</c:Object1>
<c:Object2>
<o:Class Ref="o82"/>
</c:Object2>
</o:Association>
<o:Association Id="o59">
<a:ObjectID>0AE77CF0-C370-43FA-9010-EF7E992973BF</a:ObjectID>
<a:Name>Association_16</a:Name>
<a:Code>Association_16</a:Code>
<a:CreationDate>1628509485</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628509603</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:RoleAMultiplicity>0..*</a:RoleAMultiplicity>
<a:RoleBMultiplicity>1..1</a:RoleBMultiplicity>
<c:Object1>
<o:Class Ref="o76"/>
</c:Object1>
<c:Object2>
<o:Class Ref="o83"/>
</c:Object2>
</o:Association>
<o:Association Id="o61">
<a:ObjectID>54B7D5F0-73A7-4B8A-948B-AE73045CBC62</a:ObjectID>
<a:Name>Association_17</a:Name>
<a:Code>Association_17</a:Code>
<a:CreationDate>1628509629</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628509682</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:RoleAMultiplicity>0..*</a:RoleAMultiplicity>
<a:RoleBMultiplicity>1..1</a:RoleBMultiplicity>
<c:Object1>
<o:Class Ref="o76"/>
</c:Object1>
<c:Object2>
<o:Class Ref="o71"/>
</c:Object2>
</o:Association>
<o:Association Id="o64">
<a:ObjectID>EF0D4008-C328-420F-B891-1A58BF4ECC34</a:ObjectID>
<a:Name>Association_18</a:Name>
<a:Code>Association_18</a:Code>
<a:CreationDate>1629804956</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1629804987</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:RoleAMultiplicity>1..1</a:RoleAMultiplicity>
<a:RoleBMultiplicity>0..*</a:RoleBMultiplicity>
<c:Object1>
<o:Class Ref="o84"/>
</c:Object1>
<c:Object2>
<o:Class Ref="o69"/>
</c:Object2>
</o:Association>
</c:Associations>
<c:Generalizations>
<o:Generalization Id="o8">
<a:ObjectID>8EA0AD09-C660-4D9D-906B-2C7F6F621DB7</a:ObjectID>
<a:Name>Generalisation_1</a:Name>
<a:Code>Generalisation_1</a:Code>
<a:CreationDate>1628508606</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628508606</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<c:Object1>
<o:Class Ref="o65"/>
</c:Object1>
<c:Object2>
<o:Class Ref="o66"/>
</c:Object2>
</o:Generalization>
<o:Generalization Id="o11">
<a:ObjectID>AA376889-ADB4-4524-AA8A-270F73D59BBC</a:ObjectID>
<a:Name>Generalisation_2</a:Name>
<a:Code>Generalisation_2</a:Code>
<a:CreationDate>1628508608</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628508608</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<c:Object1>
<o:Class Ref="o65"/>
</c:Object1>
<c:Object2>
<o:Class Ref="o67"/>
</c:Object2>
</o:Generalization>
<o:Generalization Id="o14">
<a:ObjectID>BC1268DC-0D99-456B-8CBB-CCDBFD5A61C3</a:ObjectID>
<a:Name>Generalisation_3</a:Name>
<a:Code>Generalisation_3</a:Code>
<a:CreationDate>1628508609</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1628508609</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<c:Object1>
<o:Class Ref="o65"/>
</c:Object1>
<c:Object2>
<o:Class Ref="o68"/>
</c:Object2>
</o:Generalization>
</c:Generalizations>
<c:TargetModels>
<o:TargetModel Id="o206">
<a:ObjectID>2901846B-3A48-4987-B612-B749C3EF4B8B</a:ObjectID>
<a:Name>Analyse</a:Name>
<a:Code>Analysis</a:Code>
<a:CreationDate>1628508135</a:CreationDate>
<a:Creator>KN</a:Creator>
<a:ModificationDate>1630748485</a:ModificationDate>
<a:Modifier>KN</a:Modifier>
<a:TargetModelURL>file:///%_OBJLANG%/analysis.xol</a:TargetModelURL>
<a:TargetModelID>87317290-AF03-469F-BC1E-99593F18A4AB</a:TargetModelID>
<a:TargetModelClassID>1811206C-1A4B-11D1-83D9-444553540000</a:TargetModelClassID>
<c:SessionShortcuts>
<o:Shortcut Ref="o3"/>
</c:SessionShortcuts>
</o:TargetModel>
</c:TargetModels>
</o:Model>
</c:Children>
</o:RootObject>

</Model>