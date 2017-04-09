import Recommender as Rec
import sys
import os
import json
def reco(user):
	R = Rec.Recommender(1,5,'u.data','u.item')
	score=[]
	for x in R.ItemRecommendation(user,R.Cos,5):
		score.append(x)
		print x[0],"'"
		print x[1][:-1],"'"
		
	#print score

#print 'UserBased Recommendation: \n'
#print 'PIP :: ', R.UserRecommendation('87',R.PIP)[0:10],'\n'
#print 'Eucli :: ', R.UserRecommendation('87',R.Eucli)[0:10],'\n'
#print 'COR :: ', R.UserRecommendation('87',R.COR)[0:10],'\n'
#print 'Cos :: ', R.UserRecommendation('87',R.Cos)[0:10],'\n'
#print 'CPC :: ', R.UserRecommendation('87',R.CPC)[0:10],'\n'
#print 'SRC :: ', R.UserRecommendation('87',R.SRC)[0:10],'\n'

#print 'ItemBased Recommendation: \n'

#print score
#score2=R.ItemRecommendation('100',R.Cos,5)
#print R.ItemRecommendation('100',R.PIP,5)
#score3=R.ItemRecommendation('100',R.SRC,5)



if __name__=="__main__":
	reco(sys.argv[1])
