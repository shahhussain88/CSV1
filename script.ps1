
az aks get-credentials --resource-group 'tsudev-rg' --name 'tsudev-aks'
helm install alb-controller oci://mcr.microsoft.com/application-lb/charts/alb-controller --namespace default --version 0.6.3 --set albController.namespace=azure-alb-system  --set albController.podIdentity.clientID=$(az identity show -g $RESOURCE_GROUP -n azure-alb-identity --query clientId -o tsv)
