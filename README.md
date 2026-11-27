# kalkylator

Js delen:

utan för functioner:
när vi start widnow på sidan så körs init. En dicitnary skappas med uniqa teken som "+" ovs, in en for loop läggs till 1-9 och 0 i dicten.

init:
I init kör programmet event.preventDefault(); sxå att sidan inte laddar om när jag läggar till någto till ett element. Sen hämar jag alla Buttons. Som sist i init körs en for loop som callas när vi lickar en button och skickar vidare den till functione on click.

onClick:
först hämat vi en input "toCalc". klicket på en button så behålls information on textens hinehåll. Då kör den igenom en långa if sats som lettar efter specifica ord i dess buttons. hittar den inte några av de här orden så lägs till i "toCalc", Ord som he lettar efter är "Kalkylera", "Ce", "Erase", "C". hittar den en button som inehåller "Kalkylera" körs functionen onCalc.

onCalc:
